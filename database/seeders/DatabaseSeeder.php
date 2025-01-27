<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(5)->create();

        $this->call(CustomerSeeder::class);
        $this->call(HotelRoomTypesSeeder::class);
        $this->call(HotelRoomsSeeder::class);
        $this->call(FeedbackSeeder::class);
        \App\Models\Customer::factory(10)->create();
        \App\Models\Feedback::factory(10)->create();
    }
}
