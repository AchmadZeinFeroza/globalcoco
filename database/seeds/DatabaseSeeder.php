<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Thumbnail::class);
        $this->call(AboutHome::class);
        $this->call(BenefitHome::class);
        $this->call(ServiceHome::class);
        $this->call(About::class);
        $this->call(Product::class);
        $this->call(Team::class);
        $this->call(Contact::class);
        $this->call(Clients::class);
        $this->call(User::class);
    }
}
