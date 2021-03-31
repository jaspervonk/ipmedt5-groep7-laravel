<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppinglistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppinglist', function (Blueprint $table) {
            $table->id();
            $table->string("product");
            $table->string("merk")->nullable();
            $table->integer("aantal")->default(1);
            $table->string("volume")->nullable();
            $table->timestamp("updated_at")->nullable();
            $table->timestamp("created_at")->nullable();
            // $table->string("user")->default("Algemeen")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppinglist');
    }
}
