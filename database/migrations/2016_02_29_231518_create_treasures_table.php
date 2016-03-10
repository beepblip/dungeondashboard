<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treasures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned();
            $table->string('name', 120);
            $table->integer('treasure_type_id')->unsigned();
            $table->text('description');
            $table->integer('value');
            $table->timestamps();

            $table->foreign('campaign_id')
                ->references('id')->on('campaigns')
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
        Schema::drop('treasures');
    }
}
