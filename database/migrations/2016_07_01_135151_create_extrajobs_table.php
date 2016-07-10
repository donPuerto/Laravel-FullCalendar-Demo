<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrajobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrajobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobschedule_id')->unsigned();
            $table->string('extra_service_type');
            $table->string('extra_job_description');
            $table->string('extra_job_assign_tech');
            $table->string('extra_payment_type',20);
            $table->string('extra_payment_status',20);
            $table->decimal('extra_job_total_payment', 10, 2);
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
        Schema::drop('extrajobs');
    }
}
