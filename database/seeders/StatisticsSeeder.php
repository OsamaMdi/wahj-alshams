<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('statistics')->insert([
            'number_of_plays' => 12,
            'number_of_awards' => 5,
            'number_of_volunteers' => 30,
            'number_of_governorates' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
