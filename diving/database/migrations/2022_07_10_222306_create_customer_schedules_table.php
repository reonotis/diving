<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_schedules', function (Blueprint $table) {
            $table->bigIncrements('id')                    ->comment('ID');

            $table->integer('schedule_id')->unsigned()     ->comment('スケジュールID');
            $table->integer('customer_id')->unsigned()->nullable()->comment('顧客ID');

            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });

        DB::statement("ALTER TABLE customer_schedules COMMENT '顧客スケジュール'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_schedules');
    }
}
