<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Disk;
use App\Models\DiskStore;
use App\Models\Store;
use App\Models\User;
use Faker\Factory as FakerFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Testing\Fakes\Fake;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory(10)->create()->each(function ($user) {
        //     $user->addresses()->create([
        //         'state' => 'Zacatecas',
        //         'city' => 'Fresnillo',
        //         'country' => 'México',
        //         'postal_code' => FakerFactory::create()->postcode,
        //     ]);
        // });


        // Artist::factory(25)->create(function () {
        //     return [
        //         'name' => FakerFactory::create()->name,
        //         'type' => FakerFactory::create()->numberBetween(0, 1),
        //         'year' => FakerFactory::create()->year(),
        //     ];
        // });

        // Disk::factory(10)->create(function () {
        //     return [
        //         'artist_id' => FakerFactory::create()->numberBetween(1, 25),
        //         'name' => FakerFactory::create()->name,
        //         'icon' => 'icon',
        //         'price' => FakerFactory::create()->numberBetween(50, 100),
        //         //'stock' => FakerFactory::create()->numberBetween(10, 100),
        //     ];
        // });

        // Store::factory(25)->create()->each(function ($store) {
        //     $store->addresses()->create([
        //         'state' => 'Zacatecas',
        //         'city' => 'Fresnillo',
        //         'country' => 'México',
        //         'postal_code' => FakerFactory::create()->postcode,
        //     ]);
        // });  

        DiskStore::factory(10)->create();
    }
}
