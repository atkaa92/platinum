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
            'hy_title' => 'Am Buying car',
            'hy_desc_title' => null,
            'hy_desc' => null,
            'hy_features_title' => null,
            'hy_features' => null ,
            'en_title' => 'En Buying car',
            'en_desc_title' => null,
            'en_desc' => null,
            'en_features_title' => null,
            'en_features' => null ,
            'ru_title' => 'Ru Buying car',
            'ru_desc_title' => null,
            'ru_desc' => null,
            'ru_features_title' => null,
            'ru_features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'hy_title' => 'Am International Tracking ',
            'hy_desc_title' => null,
            'hy_desc' => null,
            'hy_features_title' => null,
            'hy_features' => null ,
            'en_title' => 'En International Tracking ',
            'en_desc_title' => null,
            'en_desc' => null,
            'en_features_title' => null,
            'en_features' => null ,
            'ru_title' => 'Ru International Tracking ',
            'ru_desc_title' => null,
            'ru_desc' => null,
            'ru_features_title' => null,
            'ru_features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'hy_title' => 'Am Ocean Transportation',
            'hy_desc_title' => null,
            'hy_desc' => null,
            'hy_features_title' => null,
            'hy_features' => null ,
            'en_title' => 'En Ocean Transportation',
            'en_desc_title' => null,
            'en_desc' => null,
            'en_features_title' => null,
            'en_features' => null ,
            'ru_title' => 'Ru Ocean Transportation',
            'ru_desc_title' => null,
            'ru_desc' => null,
            'ru_features_title' => null,
            'ru_features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('services')->insert([
            'hy_title' => 'Am Cargo Insuranace',
            'hy_desc_title' => null,
            'hy_desc' => null,
            'hy_features_title' => null,
            'hy_features' => null ,
            'en_title' => 'En Cargo Insuranace',
            'en_desc_title' => null,
            'en_desc' => null,
            'en_features_title' => null,
            'en_features' => null ,
            'ru_title' => 'Ru Cargo Insuranace',
            'ru_desc_title' => null,
            'ru_desc' => null,
            'ru_features_title' => null,
            'ru_features' => null ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
