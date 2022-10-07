<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "name" => "super admin",
                "guard_name" => "web",
            ],
            [
                "name" => "operator",
                "guard_name" => "web",
            ],
            [
                "name" => "pengelola",
                "guard_name" => "web",
            ],
            [
                "name" => "mahasiswa",
                "guard_name" => "web",
            ]
        ]);
    }
}