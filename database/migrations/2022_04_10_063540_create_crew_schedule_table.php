<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crew_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crew_member')->onDelete('cascade');
            $table->string('name');
            $table->string('train_id');
            $table->string('train_name');
            $table->string('sign_on');
            $table->string('sign_off');
            $table->string('min_no_of_crews');
            $table->string('date');
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
        Schema::dropIfExists('crew_schedule');
    }
}
