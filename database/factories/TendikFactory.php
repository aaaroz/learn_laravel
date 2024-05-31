<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tendik>
 */
class TendikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jenkel' => 'Laki-laki',
            'alamat' => fake()->address(),
            'hp' => Str::random(10),
            'bagian' => fake()->jobTitle(),
            'email'=> fake()->safeEmail(),
            'foto' => Str::random(10),
            'no_ktp' => Str::random(10),
        ];
    }
}
