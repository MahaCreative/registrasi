<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Database\Factories\MahasiswaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            FakultasSeeder::class,
            ProdiSeeder::class,
        ]);
        Mahasiswa::factory(60)->create();
    }
}