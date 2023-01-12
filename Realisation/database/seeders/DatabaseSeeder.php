<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

          // Let's clear the users table first
          Blog::truncate();

          $faker = \Faker\Factory::create();
  
          // Let's make sure everyone has the same password and 
          // let's hash it before the loop, or else our seeder 
          // will be too slow.
          $password = Hash::make('toptal');
  
          User::create([
              'name' => 'Administrator',
              'email' => 'admin@test.com',
              'password' => $password,
          ]);
  
          // And now let's generate a few dozen users for our app:
          for ($i = 0; $i < 10; $i++) {
              User::create([
                  'name' => $faker->name,
                  'email' => $faker->email,
                  'password' => $password,
              ]);
          }
    }
}
