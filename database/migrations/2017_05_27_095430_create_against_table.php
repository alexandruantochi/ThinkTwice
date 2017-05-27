<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgainstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //campaigns that are against companies, this is the main theme of the project
        Schema::create('agn_campaigns', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('campaign_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('agn_campaigns');
    }
}
