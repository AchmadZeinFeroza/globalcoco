<?php

use Illuminate\Database\Seeder;

class BenefitHome extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('benefit')->insert([
            'title' => 'Investor Relations',
            'description' => 'Global Coco Indonesia has developed a strategy to grow and sustain its successful global business. We take advantage of opportunities where the resources we work on are huge in Indonesia. We believe Global Coco Indonesia has a very good position to take advantage of these things.',
            'image' => '/storage/home/benefit1.jpg'           
        ]);
        DB::table('benefit')->insert([
            'title' => 'Corporate Social Responsibility',
            'description' => 'Commitment is the value of our company. And we see that the establishment of this company is not just the profit we seek, but we know that there is a reason why this company should stand. Many people have the hope of having a good life, and we are here for them. We want to be a blessing to those in need.',
            'image' => '/storage/home/benefit2.jpg'           
        ]);
    }
}
