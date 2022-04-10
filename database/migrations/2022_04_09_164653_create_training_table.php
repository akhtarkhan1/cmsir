<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crew_member')->onDelete('cascade');
            $table->string('name');
            $table->string('t_from');
            $table->string('t_to');
            $table->string('t_at');
            $table->string('emu_from');
            $table->string('emu_to');
            $table->string('emu_at');
            $table->string('phy_test');
            $table->string('phy_date');
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
        Schema::dropIfExists('training');
    }
}
