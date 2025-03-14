<?php

namespace Database\Factories;

use App\Models\DiskStore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DiskStore>
 */
class DiskStoreFactory extends Factory
{
    protected $model = DiskStore::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'disk_id' => fake()->numberBetween(1, 10),
            'store_id' => fake()->numberBetween(1, 10),
            'stock' => $this->faker->numberBetween(0, 100), 
        ];
    }
}
