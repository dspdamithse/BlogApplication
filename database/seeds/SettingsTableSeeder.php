<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name' => 'Laravel Blog',
        	'address' => '345 Colombo -6',
        	'contact_number' => '071 5541748',
        	'contact_email' => 'dspdamithse@gmail.com'
        ]);
    }
}
