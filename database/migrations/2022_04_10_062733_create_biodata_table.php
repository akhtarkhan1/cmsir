<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('dob');
            $table->string('sex');
            $table->string('contact');
            $table->string('address');
            $table->integer('pincode');
            $table->string('email');
            $table->string('pass');
            $table->string('re_pass');
            $table->string('pf_no');
            $table->string('crew_type');
            $table->string('designation');
            $table->string('doj');
            $table->string('total_tdt');
            $table->string('total_na');
            $table->string('basic_salary');
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
        Schema::dropIfExists('biodata');
    }
}
