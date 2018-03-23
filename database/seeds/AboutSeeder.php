<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'hy_title' => 'Am Long-term bussiness',
            'hy_desc' => null,
            'en_title' => 'Long-term bussiness',
            'en_desc' => null,
            'ru_title' => 'Ru Long-term bussinessr',
            'ru_desc' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'hy_title' => 'Am Maintaining your bussiness',
            'hy_desc' => null,
            'en_title' => 'Maintaining your bussiness',
            'en_desc' => null,
            'ru_title' => 'Ru Maintaining your bussinessr',
            'ru_desc' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('abouts')->insert([
            'hy_title' => 'Am Our team',
            'hy_desc' => null,
            'en_title' => 'Our team',
            'en_desc' => null,
            'ru_title' => 'Ru Our teamr',
            'ru_desc' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
