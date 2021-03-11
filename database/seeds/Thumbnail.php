<?php

use Illuminate\Database\Seeder;

class Thumbnail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thumbnail')->insert([
            'title' => 'Welcome to Our Company',
            'description' => 'Specialized in coconut product',
            'image' => '/storage/thumbnail/slider1.jpg'           
        ]);
        DB::table('thumbnail')->insert([
            'title' => 'Supplying across the globe',
            'description' => 'The Leading Supplier of Coconut Product',
            'image' => '/storage/thumbnail/slider3.jpg'           
        ]);
        DB::table('thumbnail')->insert([
            'title' => '10 years of experience',
            'description' => 'Industry Experts',
            'image' => '/storage/thumbnail/slider4.jpg'           
        ]);
    }
}
