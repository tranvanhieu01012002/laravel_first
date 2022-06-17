<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Car;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        // DB::table('cars')->insert([
        //     'make' => Str::random(10),
        //     'model' => Str::random(10),
        //     'produced_on' =>Carbon::parse('01-01-2022'),
        //     // 'created_at	' =>Carbon::parse('01-02-2022'),
        //     // 'updated_at	' =>Carbon::parse('01-03-2022'),
        // ]);
        Car::factory()->count(10)->create();
    }
}
