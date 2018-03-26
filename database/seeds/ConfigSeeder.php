<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
            'hy_address' => '2 Kievyan st. Yerevan , Armenia',
            'en_address' => '2 Kievyan st. Yerevan , Armenia',
            'ru_address' => '2 Kievyan st. Yerevan , Armenia',
            'phone' => '+374 10 22 40 99',
            'mobile' => '+374 96 57 80 09',
            'email' => 'info@platinum.am',
            'wday_from' => '9',
            'wday_to' => '6',
            'wend_from' => '9',
            'wend_to' => '1',
        ]);
    }
}
