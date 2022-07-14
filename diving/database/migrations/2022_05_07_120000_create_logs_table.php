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
            $table->integer('customer_id')->unsigned()->nullable()->comment('顧客ID');
            $table->integer('num')->unsigned()->nullable() ->comment('ナンバー');
            $table->date('date')                           ->comment('潜水日');
            $table->time('entry_time')                     ->comment('潜水開始時間');
            $table->time('exit_time')                      ->comment('潜水終了時間');
            $table->time('swim_time')                      ->comment('潜水時間');

            $table->tinyInteger('entry')->unsigned()->nullable() ->comment('1:ボート 2:ビーチ');
            $table->tinyInteger('wether')->unsigned()->nullable()->comment('1:晴れ 2:曇り 3:雨 etc...');
            $table->tinyInteger('wave')->unsigned()->nullable()  ->comment('1:無し 2:やや 3:激しい');
            $table->tinyInteger('flow')->unsigned()->nullable()  ->comment('1:無し 2:やや 3:強い');
            $table->tinyInteger('wind')->unsigned()->nullable()  ->comment('1:無し 2:やや 3:強い');

            $table->tinyInteger('max_water_depth')->unsigned()->nullable()  ->comment('最大水深');
            $table->tinyInteger('average_water_depth')->unsigned()->nullable()  ->comment('最大水深');

            $table->tinyInteger('start_residual_pressure')->unsigned()->nullable()->comment('開始時残圧');
            $table->tinyInteger('end_residual_pressure')->unsigned()->nullable()->comment('終了時残圧');
            $table->tinyInteger('amount_residual_pressure')->unsigned()->nullable()->comment('使用量');

            // 気温
            // 水温
            // ガス
            // タンク
            // スーツ
            // ウエイト

            $table->timestamp('created_at')    ->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日時')	;
            $table->timestamp('updated_at')    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->boolean('delete_flag')     ->default('0')->comment('削除フラグ');
        });

        DB::statement("ALTER TABLE logs COMMENT 'ログ'");
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
