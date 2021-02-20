<?php

use Illuminate\Database\Seeder;

class Team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            'name' => 'Anderson',
            'job' => 'President Director',
            'description' => 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75 nuts that can be harvested, split with machetes and left to dry in the sun',
            'image' => '/storage/team/team1.jpg',
            'fb' => 'facebook.com',           
            'ig' => 'instagram.com'           
        ]);
        DB::table('team')->insert([
            'name' => 'John Petrucci',
            'job' => 'Publi Relation',
            'description' => 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75 nuts that can be harvested, split with machetes and left to dry in the sun',
            'image' => '/storage/team/team2.jpg',
            'phone' => '088888888'           
        ]);
        DB::table('team')->insert([
            'name' => 'Alexander',
            'job' => 'Account Executive',
            'description' => 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75 nuts that can be harvested, split with machetes and left to dry in the sun',
            'image' => '/storage/team/team3.jpg',
            'email' => 'email@gamil.com',
            'fb' => 'facebook.com'           
        ]);
        DB::table('team')->insert([
            'name' => 'Alexander',
            'job' => 'Account Executive',
            'description' => 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75 nuts that can be harvested, split with machetes and left to dry in the sun',
            'image' => '/storage/team/team4.jpg',
            'phone' => '081888222'           
        ]);
        DB::table('team')->insert([
            'name' => 'Alexander',
            'job' => 'Account Executive',
            'description' => 'Copra is the dried flesh of coconuts. Every adult coconut tree bears 50-75 nuts that can be harvested, split with machetes and left to dry in the sun',
            'image' => '/storage/team/team3.jpg',
            'fb' => 'facebook.com',
            'phone' => '0812345678'           
        ]);
    }
}
