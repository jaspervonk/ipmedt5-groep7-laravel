<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSleepgunscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sleepgunscores', function (Blueprint $table) {
            $table->string('user');
            $table->string('date');
            $table->float('totalTime');
            $table->integer('targetTotal');
            $table->integer('targetHits');
            $table->integer('targetMisses');
            $table->float('targetAccuracy');
            $table->integer('targetReactionTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sleepgunscores');
    }
}
