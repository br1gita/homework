<?php

namespace Database\Seeders;

use App\Models\Conference;
use Carbon\Carbon;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(5),
                'data' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'place' => Lorem::word(),
                'description' => Lorem::text()
            ],
            [
                'title' => Lorem::sentence(5),
                'data' => Carbon::now()->addDays(rand(1, 365))->format('Y-m-d'),
                'place' => Lorem::word(),
                'description' => Lorem::text()
            ],
        ]);
    }
}
