<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterMonster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_monster', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('encounter_id')->unsigned();
            $table->integer('monster_id')->unsigned();

            $table->foreign('encounter_id')
                ->references('id')->on('encounters')
                ->onDelete('cascade');

            $table->foreign('monster_id')
                ->references('id')->on('monsters')
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
        Schema::drop('encounter_location');
    }
}
