<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Operator;
use App\Models\User;
use Database\Factories\MahasiswaFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

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

        $user1 = User::create([
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::create([
            'username' => 'pengelola',
            'email' => 'pengelola@gmail.com',
            'password' => bcrypt('password'),
        ]);


        $user3 = User::create([
            'username' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user3->profile()->create([
            'nip' => '1122334455',
            'nama_lengkap' => 'Mulki',
            'alamat' => 'jl Tamasapi',
            'tempat_lahir' => 'Makassar',
            'ttl' => '1998-01-17',
            'telp' => '082352310844',
        ]);


        $user4 = User::create([
            'nim' => '180250502054',
            'username' => 'gunturmadjid.25',
            'email' => 'gunturmadjid.25@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user4->profile()->create([
            'nim' => '180250502054',
            'nama_lengkap' => 'Guntur Madjid',
            'alamat' => 'Jl diponegoro',
            'tempat_lahir' => 'Makassar',
            'ttl' => '1998-01-17',
            'telp' => '082352310844',
            'fakultas_id' => 1,
            'prodi_id' => 1,
        ]);
        $this->call([
            FakultasSeeder::class,
            ProdiSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);

        $user1->assignRole('super admin');
        $user2->assignRole('pengelola');
        $user3->assignRole('operator');
        $user4->assignRole('mahasiswa');
    }
}