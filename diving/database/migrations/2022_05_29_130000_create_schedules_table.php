<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id')                        ->comment('ID');

            $table->date('date')                               ->comment('日程');
            $table->string('title')                            ->comment('タイトル');
            $table->integer('days')->unsigned()                ->comment('日数');
            $table->integer('capacity')->unsigned()            ->comment('定員人数');

            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });

        DB::statement("ALTER TABLE schedules COMMENT 'スケジュール'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
