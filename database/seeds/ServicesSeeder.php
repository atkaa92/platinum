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
            'en_title' => 'Buying car',
            'en_desc_title' => 'Buying car',
            'en_desc' => 'Platinum Motors Armenia is an exclusive broker that can provide you with a Car, Motorcycle, Boat and Heavy Machinery from USA that has quality, payment, and delivery guarantees Vehicle prices from the U.S. are much lower than prices in European markets, even after adding all costs ofimports. Consultations with clients are conducted for free in our office, by phone, Skype or via email. For every sold car we provide a special Carfax or Autocheck report with fullguarantee of its legality, describing the entire history of the vehicle. Whether you are an experienced car dealer or just an individual interested in buying vehicles, we put our knowledge and experience at your service. We are ready to provide you with clear and detailed information about each lot so that you could feel confident in what you are buying.',
            'en_features_title' => 'Buying sources',
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
            'hy_title' => 'Am International Trackin ',
            'hy_desc_title' => null,
            'hy_desc' => null,
            'hy_features_title' => null,
            'hy_features' => null ,
            'en_title' => 'International Trackin ',
            'en_desc_title' => 'International Tracking',
            'en_desc' => 'The process of vehicle transportation to the warehouse or the port will begin as soon as the vehicle is paid for. A Platinum Motors representative will verify the vehicle and the title/ownership are ready for pick up and a vehicle will be dispatched to the location. We are increasing loading terminal to reduce the distance and cost of Inland transportation. Note: All vehicles are insured during ground transportation and are picked up by a flat bed or tow truck. We "use" qualified drivers approved and licensed by the U.S. Government. Our transfer rates are among the best in the industry. This helps to keep your total costs as low as possible.',
            'en_features_title' => 'Key Points',
            'en_features' => null ,
            'ru_title' => 'Ru International Trackin ',
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
            'en_title' => 'Ocean Transportation',
            'en_desc_title' => 'Ocean Transportation',
            'en_desc' => 'Your vehicle will be delivered to one of our warehouses in Newark,NJ, Savannah,GA, Houston,TX, Los Angeles,CA or Chicago,IL. You will be provided with a container number which you can "use" to get an updated position of your cargo. If you are shipping a single vehicle then it will be consolidated into a container with other vehicles and loaded as soon as all the vehicles are ready to export. Our experience and reputation allows us to have many cars to consolidate containers to Armenia, Georgia and Russia from all terminals almost every week, which helps us reduce the shipping duration. No Storage Fees - We guarantee that you will not pay any storage fees on the purchased item if transportation is ordered with us and the vehicle and shipping are paid at once on the sale date or next day from the sale date. Please note Platinum Motors does not provide customs clearance services at the destination country and it is the clients responsibility to clear their cargo.',
            'en_features_title' => 'Loading Terminals',
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
            'en_title' => 'Cargo Insuranace',
            'en_desc_title' => 'Cargo Insuranace',
            'en_desc' => 'Shipping lines and loading companies do not have insurance for your cargo. As a valued customer, we want you to know the fact before you ship. If your container sinks to the bottom of the ocean, or catches fire, the maximum payoff will be $500 per container from the shipping line. You need your own insurance policy. Platinum Motors does not cover your valuable cargo, while in transit. We offer insurance policy by RGS Armenia. Note: Case must be claimed to Insurance Company in delivery terminal before taking cargo out.',
            'en_features_title' => 'Key Points',
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
