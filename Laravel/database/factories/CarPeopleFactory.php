<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CarPeopleFactory extends Factory
{
  
    public function definition(): array
    {
        return [
            'car_id' => fake()->numberBetween(1,10),
            'people_id' => fake()->numberBetween(1,10),
        ];
    }
}
