<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitecontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitecontacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobschedule_id')->unsigned();
            $table->string('site_contact_name',50);
            $table->string('site_contact_job_title',50);
            $table->string('site_contact_phone1',20);
            $table->string('site_contact_phone2',20);
            $table->string('site_contact_notes');
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
        Schema::drop('sitecontacts');
    }
}
