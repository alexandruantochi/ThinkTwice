<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubstanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_substance', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('product_id')->unsigned();
            $table->integer('substance_id')->unsigned();
            //cheii straine care referentiaza tabelele products si substances
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('substance_id')->references('id')->on('substances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_substance');
    }
}
