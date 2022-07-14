<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE log_transactions COMMENT 'ログ トランザクション'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_transactions');
    }
}
