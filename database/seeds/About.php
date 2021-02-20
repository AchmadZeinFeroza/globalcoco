<?php

use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'title' => 'COCONUT PLANTATION',
            'description' => 'We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.',
            'image' => '/storage/about/about1.jpg'           
        ]);
        DB::table('about')->insert([
            'title' => 'WE PROVIDE TRAINING TO COCONUT FARMERS',
            'description' => 'Our company also continues to provide training for Coconut Farmers to get maximum results for their welfare.',
            'image' => '/storage/about/about2.jpg'           
        ]);
        DB::table('about')->insert([
            'title' => 'RE-PLANTING COCONUT TREE',
            'description' => 'We also participate in supporting the coconut plantation ecosystem in Indonesia, and we ensure that there will be regeneration for each coconut tree. Because Coconut is a tree of life',
            'image' => '/storage/about/about3.jpg'           
        ]);
        DB::table('about')->insert([
            'title' => 'PRODUCTION PLANT',
            'description' => 'We also have a processing plant for coconut derivatives with the latest technology and accompanied by workers who are experts in their fields. We continue to produce International quality products.',
            'image' => '/storage/about/about4.jpg'           
        ]);
        DB::table('about')->insert([
            'title' => 'CONTAINER LOGISTICS',
            'description' => 'Our company works with several International Shipping to answer consumer needs. With the best quality service and also affordable prices for each selected shipping route',
            'image' => '/storage/about/about5.jpg'           
        ]);
    }
}
