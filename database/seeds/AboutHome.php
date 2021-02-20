<?php

use Illuminate\Database\Seeder;

class AboutHome extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouthome')->insert([
            'description' => 'We are an Indonesian company engaged in plantation and we also supply raw materials from coconut which will be in production some processed products.
            <br> Our company is very skilled in the industry, we have the best experiences that make our customers satisfied with every existing cooperation.',
            'image' => '/storage/home/abouthome.jpg'           
        ]);
    }
}
