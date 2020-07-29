<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name' => "Laravel's Blog",
            'contact_number' => '00225 6764 7896',
            'contact_email' => 'info@laravel.com',
            'address' => 'Treichville Arras II'

        ]);
    }
}
