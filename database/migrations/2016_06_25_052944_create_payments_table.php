<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobschedule_id')->unsigned();
            $table->string('payment_type',20);
            $table->string('payment_status',20);
            $table->decimal('payment_estimated_charge', 10, 2);
            $table->decimal('payment_actual_charge', 10, 2);
            $table->decimal('payment_initial_deposit', 10, 2);
            $table->decimal('payment_collectible_amount', 10, 2);
            $table->string('payment_description');
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
        Schema::drop('payments');
    }
}
