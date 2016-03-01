<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTreasure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_treasure', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('treasure_id')->unsigned();

            $table->foreign('session_id')
                ->references('id')->on('sessions')
                ->onDelete('cascade');

            $table->foreign('treasure_id')
                ->references('id')->on('treasures')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('session_treasure');
    }
}
