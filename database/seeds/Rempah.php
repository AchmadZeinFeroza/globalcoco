<?php

use Illuminate\Database\Seeder;

class Rempah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rempah')->insert([
            'image' => '/storage/rempah/1.jpg'           
        ]);
        DB::table('rempah')->insert([
            'image' => '/storage/rempah/2.jpg'           
        ]);
    }
}
