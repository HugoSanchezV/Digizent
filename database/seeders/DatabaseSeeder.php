<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(10)->create(function() {
            return [
                'name' => FakerFactory::create()->name,
                'lastname' => FakerFactory::create()->lastName,
                'email' => FakerFactory::create()->email,
                'password' => Hash::make('password'),
            ];
        });
    }
}
