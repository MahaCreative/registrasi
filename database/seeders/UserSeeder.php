<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 62; $i++) {
            User::create([
                'nim' => '1802505020' . $i,
                'password' => bcrypt('password'),
            ]);
        }
    }
}