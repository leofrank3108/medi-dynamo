<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoiments', function (Blueprint $table) {

            
            // $table->bigInteger('clinic_id')->unsigned()->nullable();
            // $table->foreign('clinic_id')->references('id')->on('clinics');
            
            $table->bigInteger('schedule_id')->unsigned()->nullable();
            $table->foreign('schedule_id')->references('id')->on('schedules');

            $table->bigInteger('doctor_id')->unsigned()->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('appoiments');
    }
}
