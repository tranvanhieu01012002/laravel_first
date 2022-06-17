<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
    public function definition()
    {
        // $faker = Faker\Factory::create();
        return [
            'description' => $this->faker->paragraph(),
            'model' => $this->faker->name(),
            'image' => '1.jpg',
            'updated_at'=> now(),
            'created_at'=> now()
        ];
    }
}
