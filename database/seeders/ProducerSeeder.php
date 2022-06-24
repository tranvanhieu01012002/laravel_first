<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producer;
use App\Models\Car;
class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for ($i=0; $i < 4; $i++) { 
        //     $pr = 
        //     Car::factory()->for($pr)->count(6)->create();
        // }
        Producer::factory()->count(10)->create();
        // C::factory()->count(10)->create();
    }
}
