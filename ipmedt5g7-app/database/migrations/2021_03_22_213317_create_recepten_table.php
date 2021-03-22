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
            $table->string('ingredienten');
            $table->string('bereiden');
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

        Schema::dropIfExists('recept');
    }
}
