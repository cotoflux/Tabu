<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('events')->insert([
            'title' => 'diversity',
            'event_date' => '2020-10-01',
            'hour' => '15:30',
            'location' => 'Barcelona',
            'value' => '50',
            'description' => Str::random(30)
        ]);
        
    }
}
