<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesktimerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desktimer', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('total_work_hours')->default(0);
            $table->integer('total_work_minutes')->default(0);
            $table->integer('total_work_seconds')->default(0);

            $table->integer('total_pause_hours')->default(0);
            $table->integer('total_pause_minutes')->default(0);
            $table->integer('total_pause_seconds')->default(0);

            $table->string('datum')->default('XX-XX-XXXX');

            $table->integer('aantal_pauzes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desktimer');
    }
}
