<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepten', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('soort');
            $table->text('ingredienten');
            $table->text('bereiden')->nullable();
            $table->text('bereiden_1')->nullable();
            $table->text('bereiden_2')->nullable();
            $table->text('bereiden_3')->nullable();
            $table->integer('timer_1')->nullable();
            $table->integer('timer_2')->nullable();
            $table->integer('timer_3')->nullable();
            $table->string('afbeelding')->default('/img/recept_default.jpg');
            $table->string('hoeveelheid');
            $table->integer('tijd');
            $table->integer('punten');
            $table->foreign('soort')->references('soort')->on('soort_recept');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recepten', function (Blueprint $table) {
            $table->dropForeign('recepten_soort_foreign');
        });

        Schema::dropIfExists('recepten');
    }
}
