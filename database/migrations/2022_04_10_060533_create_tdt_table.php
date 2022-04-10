<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crew_id')->unsigned();
            $table->foreign('crew_id')->references('id')->on('crew_member')->onDelete('cascade');
            $table->string('c_name');
            $table->string('sign_on');
            $table->string('sign_off');
            $table->integer('km_earning');
            $table->string('duration');
            $table->integer('total_tdt');
            $table->integer('total_na');
            $table->string('sec_id');
            $table->string('sec_name');
            $table->string('sec_code');
            $table->string('p_from');
            $table->string('p_to');
            $table->string('tounge');
            $table->integer('trips');
            $table->integer('train_load');
            $table->string('train_type');
            $table->string('service');
            $table->string('cls_of_engine');
            $table->string('running_room');
            $table->string('na_spell');
            $table->string('ot_spell');
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
        Schema::dropIfExists('tdt');
    }
}
