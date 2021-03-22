<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recept', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('soort');
            $table->foreign('soort')->references('soort')->on('soort_recept');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recept', function (Blueprint $table) {
            $table->dropForeign('recept_soort_foreign');
        });

        Schema::dropIfExists('recept');
    }
}
