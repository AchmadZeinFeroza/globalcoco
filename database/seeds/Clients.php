<?php

use Illuminate\Database\Seeder;

class Clients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'COGENT BREEDING LTD',
            'description' => 'Our copra meal is used for food ingredients for more than 2000 cows in this company every month.',       
        ]);
        DB::table('clients')->insert([
            'name' => 'PARAKH GROUP',
            'description' => 'Our coconut peat is used as a planting medium that works well for plant growth in this company.',       
        ]);
        DB::table('clients')->insert([
            'name' => 'LOTTE MART',
            'description' => 'We have a regular supply of consumer needs at some LotteMart in Indonesia based on coconut products.',       
        ]);
        DB::table('clients')->insert([
            'name' => 'Weber',
            'company' => 'WEBER-STEPHEN PRODUCTS',
            'description' => 'We continue to supply charcoal for regular BBQ every month to this company in the United States.',       
        ]);
    }
}
