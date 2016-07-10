<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id')->unsigned();
            $table->string('job_order_number',100);
            $table->integer('job_queue');
            $table->string('service_type',50);
            $table->string('technician',50);
            $table->string('job_assign_color');
            $table->string('job_description');
            $table->string('job_notes');
            $table->string('pre_job_sched_status',50);
            $table->string('job_sched_status',50);
            $table->string('est_job_time_sched',50);
            $table->string('job_site_address');
            $table->string('job_site_suburb',20);
            $table->string('job_site_postal_code',20);
            $table->string('job_site_country',20);
            $table->string('title',50);
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::drop('jobschedules');
    }
}
