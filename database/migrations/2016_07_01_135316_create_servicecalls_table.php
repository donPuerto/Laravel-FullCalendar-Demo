<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicecallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicecalls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobschedule_id')->unsigned();
            $table->string('sc_service_type');
            $table->string('sc_job_description');
            $table->string('sc_job_fault_tech');
            $table->string('sc_job_assign_tech');
            $table->decimal('sc_est_service_charge', 10, 2);
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
        Schema::drop('servicecalls');
    }
}
