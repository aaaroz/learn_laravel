<?php

namespace Database\Seeders;

use App\Models\Tendik;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tendik::factory(10)->create();
    }
}
