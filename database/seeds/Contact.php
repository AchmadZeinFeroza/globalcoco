<?php

use Illuminate\Database\Seeder;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'email' => 'globalcocoindonesia@gamil.com',
            'address' => 'Kabupaten Jember Provinsi Jawa Timur',           
            'fb' => 'facebook.com',
            'ig' => 'Intagram.com',           
            'twitter' => '085236785999',           
            'phone' => '085107670707',           
            'yt' => 'https://youtu.be/SWxBQwfI0NU',           
            'map' => 'https://www.google.com/maps/place/Jember,+Kaliwates,+Jember+Regency,+East+Java/data=!4m2!3m1!1s0x2dd699e31fb22e71:0x3027a76e352bd10?sa=X&ved=2ahUKEwjfj4263_juAhXBxjgGHTroAvQQ8gEwAHoECAQQAQ',           
        ]);
    }
}
