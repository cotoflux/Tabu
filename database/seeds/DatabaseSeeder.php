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
        $this->call(InterestTableSeeder::class);
        $this->call(ArticuloTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(EventTableSeeder::class);
    }
}
