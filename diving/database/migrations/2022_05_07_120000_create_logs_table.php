<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id')                    ->comment('ID');

            $table->integer('instructor_id')->unsigned()   ->comment('インストラクターID');
            $table->integer('customer_id')->unsigned()     ->comment('顧客ID');
            $table->integer('num')->unsigned()             ->comment('ナンバー');
            $table->date('date')                           ->comment('潜水日');
            $table->time('entry_time')                     ->comment('潜水開始時間');
            $table->time('exit_time')                      ->comment('潜水終了時間');

            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
