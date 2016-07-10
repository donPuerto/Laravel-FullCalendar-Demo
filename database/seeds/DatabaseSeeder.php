<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::truncate();
        App\Contact::truncate();
        App\JobSchedule::truncate();
        App\SiteContact::truncate();
        App\Payment::truncate();
        App\ServiceCall::truncate();
        App\ExtraJob::truncate();

        factory(App\User::class,1)->create();
        factory(App\Contact::class,10)->create();
        factory(App\SiteContact::class,100)->create();
        factory(App\JobSchedule::class,100)->create();
        factory(App\Payment::class,100)->create();
        factory(App\ServiceCall::class,100)->create();
        factory(App\ExtraJob::class,100)->create();
    }
}
