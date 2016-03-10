<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTreasureRelationToType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treasures', function (Blueprint $table) {
            $table->foreign('treasure_type_id')
                ->references('id')->on('treasure_types')
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
        Schema::table('treasures', function (Blueprint $table) {
            $table->dropForeign('treasures_treasure_type_id_foreign');
        });
    }
}
