<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsPendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns_pending', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->longText('description');
            $table->string('category');
            $table->integer('organizer_id')->unsigned();
            $table->integer('number_of_power_user_approves')->unsigned();
            $table->timestamps();

            //cheie straina care referentiaza tabela users
            $table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns_pending');
    }
}
