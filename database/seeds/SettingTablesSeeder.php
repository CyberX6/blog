<?php

use Illuminate\Database\Seeder;

class SettingTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Blog in Laravel',
            'address' => 'Tbilisi, Georgia',
            'contact_number' => '5465 456457 547',
            'contact_email' => 'admin@fdgsgdfsghb.com'
        ]);
    }
}
