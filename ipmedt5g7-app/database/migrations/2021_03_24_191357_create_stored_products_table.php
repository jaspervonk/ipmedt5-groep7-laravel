<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoredProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stored_products', function (Blueprint $table) {
            $table->id();
            $table->integer('EAN')->unique();
            $table->string('product');
            $table->string('merk');
            $table->string('volume')->nullable();
            $table->float('prijs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_products');
    }
}
