<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcScene extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npc_scene', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npc_id')->unsigned();
            $table->integer('scene_id')->unsigned();

            $table->foreign('npc_id')
                ->references('id')->on('npcs')
                ->onDelete('cascade');

            $table->foreign('scene_id')
                ->references('id')->on('scenes')
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
        Schema::drop('npc_scene');
    }
}
