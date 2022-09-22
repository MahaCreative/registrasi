<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nim' => '18025050' . rand(1, 2) . '0' . rand(1, 100),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'telp' => $this->faker->phoneNumber(),
            'id_prodi' => rand(1, 2),
            'avatar' => 'http://127.0.0.1:8000/image/OIP.jfif'
        ];
    }
}