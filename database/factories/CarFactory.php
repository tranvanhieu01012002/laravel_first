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
            'producer_id' =>rand(1,10),
            'model' => $this->faker->name(),
            'image' => rand(0,4).'.jpg',
            // 'producer_id'=> $this->faker->name()
        ];
    }
}
