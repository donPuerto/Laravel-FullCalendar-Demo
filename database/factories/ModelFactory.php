<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Don Puerto',
        'email' => 'don.puerto@hotmail.com',
        'password' => bcrypt('siemens1003'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => 1,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
    ];
});

$factory->define(App\JobSchedule::class, function (Faker\Generator $faker) {
    $time = rand( strtotime("Jun 01 2016"), strtotime("Jun 30 2016"));
    return [

        'contact_id' => $faker->numberBetween($min = 1, $max = 10),
        'job_assign_color' => $faker->hexColor,
        'job_order_number' => $faker->dayOfMonth($max = 'now').$faker->month($max = 'now').$faker->year($max = 'now').$faker->bothify('##?##??##'),
        'service_type' => $faker->randomElement($array = array('Windows Painting', 'Repairs and Maintenance', 'Repairs-Screen', 'New Security Screen', 'Glass Replacement')),
        'technician' => $faker->name,
        'job_description' => $faker->sentence,
        'pre_job_sched_status' => $faker->randomElement($array = array('To be confirmed','Confirmed','Pencil')),
        'est_job_time_sched' => $faker->randomElement($array = array('7am - 12noon','1pm - 4pm', 'Whole Day')),
        'job_sched_status' => $faker->randomElement($array = array('Booked Job','Job Completed', 'To be rescheduled','Extra work required', 'Quote Required','Service Call', 'Stock to be ordered','Job Cancelled')),
        'job_site_address' => $faker->address,
        'job_site_suburb' => $faker->city,
        'job_site_postal_code' => $faker->postcode,
        'job_site_country' => $faker->country,
        'job_notes' => $faker->sentence,
        'title' => $faker->name,
        'start' =>date("Y-m-d H:m:s", $time),
        'end' =>date("Y-m-d H:m:s", strtotime("+2 days",$time   ))

    ];
});


$factory->define(App\SiteContact::class, function (Faker\Generator $faker) {
    return [
        'site_contact_name' => $faker->name,
        'jobschedule_id' =>  $faker->numberBetween($min = 1, $max = 10),
        'site_contact_job_title' => $faker->jobTitle,
        'site_contact_phone1' => $faker->phoneNumber,
        'site_contact_phone2' => $faker->phoneNumber,
        'site_contact_notes' => $faker->sentence,
    ];


});

$factory->define(App\Payment::class, function (Faker\Generator $faker) {

    return [
        'jobschedule_id' => $faker->numberBetween($min = 1, $max = 10),
        'payment_type' => $faker->randomElement($array = array('Credit Card','Cash','Cheque')),
        'payment_status' => $faker->randomElement($array = array('Collectible','Paid','Due')),
        'payment_estimated_charge' =>$faker->numberBetween($min = 1000, $max =100000),
        'payment_actual_charge' =>$faker->numberBetween($min = 1000, $max =100000),
        'payment_initial_deposit' =>$faker->numberBetween($min = 10000, $max =100000),
        'payment_description' => $faker->paragraph,
    ];

});


$factory->define(App\ExtraJob::class, function (Faker\Generator $faker) {
    return [
        'jobschedule_id' => $faker->numberBetween($min = 1, $max = 10),
        'extra_service_type' => $faker->randomElement($array = array('Windows Painting', 'Repairs and Maintenance', 'Repairs-Screen', 'New Security Screen', 'Glass Replacement')),
        'extra_job_description' => $faker->paragraph,
        'extra_job_assign_tech' => $faker->name,
        'extra_payment_type' => $faker->randomElement($array = array('Credit Card','Cash','Cheque')),
        'extra_payment_status' => $faker->randomElement($array = array('Collectible','Paid','Due')),
        'extra_job_total_payment' => $faker->numberBetween($min = 10000, $max =100000),

    ];
});


$factory->define(App\ServiceCall::class, function (Faker\Generator $faker) {
    return [
        'jobschedule_id' => $faker->numberBetween($min = 1, $max = 10),
        'sc_service_type' => $faker->randomElement($array = array('Windows Painting', 'Repairs and Maintenance', 'Repairs-Screen', 'New Security Screen', 'Glass Replacement')),
        'sc_job_description' => $faker->paragraph,
        'sc_job_fault_tech' => $faker->name,
        'sc_job_assign_tech' => $faker->name,
        'sc_est_service_charge' => $faker->numberBetween($min = 10000, $max =100000),
  ];
});