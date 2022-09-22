<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            [
                'id_fakultas' => 1,
                'kd_prodi' => 'ti-01',
                'nama_prodi' => 'Teknik Informatika',
            ],
            [
                'id_fakultas' => 1,
                'kd_prodi' => 'si-02',
                'nama_prodi' => 'Sistem Informasi',
            ],

        ]);
    }
}