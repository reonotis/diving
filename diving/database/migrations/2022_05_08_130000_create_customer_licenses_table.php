<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_licenses', function (Blueprint $table) {
            $table->bigIncrements('id')                    ->comment('ID');

            $table->integer('customer_id')->unsigned()         ->comment('顧客の時のID');
            $table->integer('license_id')->unsigned()          ->comment('ライセンスID');

            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });

        DB::statement("ALTER TABLE customer_licenses COMMENT '顧客が所有しているライセンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_licenses');
    }
}
