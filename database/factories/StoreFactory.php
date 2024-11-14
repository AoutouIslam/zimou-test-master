<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Store;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'code' => Str::random(10),
            'name' => fake()->name(),
            'email'=> fake()->unique()->safeEmail(),
            'phones' => fake()->unique->phoneNumber(),
            //'company_name' => fake()->name(),
            //'capital' => fake()->name(),
            //'adress' => fake()->name(),
            //'register_commerce_number' => fake()->name(),
            //'nif' => fake()->name(),
            //'legal_form' => fake()->name(),
            //'status' => fake()->numberBetween(1,5), // this is for the statuses
            //'can_update_preparing_packages' => fake()->boolean(),
        ];
    }
}
