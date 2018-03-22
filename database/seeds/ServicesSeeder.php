<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Buying car',
            'decs_title' => null,
            'desc' => null,
            'features_title' => null,
            'features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'title' => 'International Tracking ',
            'decs_title' => null,
            'desc' => null,
            'features_title' => null,
            'features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'title' => 'Ocean Transportation',
            'decs_title' => null,
            'desc' => null,
            'features_title' => null,
            'features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'title' => 'Cargo Insuranace',
            'decs_title' => null,
            'desc' => null,
            'features_title' => null,
            'features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
