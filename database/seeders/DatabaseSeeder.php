<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Asset;

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
        // Asset::factory(10)->create();
        User::factory()->create([
            'name' => 'dimas',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('password')
        ]);


    }
}
