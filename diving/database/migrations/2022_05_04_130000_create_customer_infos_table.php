<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->unique()->constrained('customers')->comment('顧客ID');

            $table->string('tel')->index()     ->nullable()->comment('電話番号');
            $table->string('email')->index()   ->nullable()->comment('メールアドレス');
            $table->string('zip21','3')        ->nullable()->comment('郵便番号1');
            $table->string('zip22','4')        ->nullable()->comment('郵便番号2');
            $table->string('pref21')           ->nullable()->comment('都道府県');
            $table->string('addr21')           ->nullable()->comment('市区町村');
            $table->string('street21')         ->nullable()->comment('所在');
            $table->tinyInteger('sex')->unsigned()->nullable()->comment('性別');


            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });

        DB::statement("ALTER TABLE customer_infos COMMENT '顧客の詳細情報'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_infos');
    }
}
