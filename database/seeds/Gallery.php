<?php

use Illuminate\Database\Seeder;

class Gallery extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            'image' => '/storage/gallery/1.jpeg'           
        ]);
        DB::table('gallery')->insert([
            'image' => '/storage/gallery/2.jpeg'           
        ]);
        DB::table('gallery')->insert([
            'image' => '/storage/gallery/3.jpeg'           
        ]);
        DB::table('gallery')->insert([
            'image' => '/storage/gallery/4.jpeg'           
        ]);
    }
}
