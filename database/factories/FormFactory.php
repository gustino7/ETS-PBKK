<?php

namespace Database\Factories;

use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Arr::random(['Meja', 'Kursi', 'Komputer', 'Mouse']),
            'jenis' => Arr::random(['Jenis1', 'Jenis2', 'Jenis3', 'Jenis4']),
            'kondisi' => Arr::random(['layak', 'rusak', 'baik']),
            'keterangan' => Arr::random(['Tidak ada', 'Bagus ini barangnya', 'Keren kok', 'Lahh gitu']),
            'kecacatan' => Str::random(10),
            'jumlah' => fake()->randomNumber(2),
            'image' => Arr::random(['image1.png', 'image2.png', 'image3.png']),
        ];
    }
}
