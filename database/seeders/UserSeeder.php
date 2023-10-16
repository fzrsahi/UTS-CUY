<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Data admin
        DB::table('users')->insert([
            'name' => "admin",
            'username' => 'admin',
            'pass' => Hash::make('admin123'),
            'role' => "admin",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data karyawan 1
        DB::table('users')->insert([
            'name' =>  "karyawan 1",
            'username' => 'karyawan1',
            'pass' => Hash::make('karyawan1'),
            'role' => "karyawan",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data karyawan 2
        DB::table('users')->insert([
            'name' =>  "karyawan 2",
            'username' => 'karyawan2',
            'pass' => Hash::make('karyawan2'),
            'role' => "karyawan",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data karyawan 3
        DB::table('users')->insert([
            'name' =>  "karyawan 3",
            'username' => 'karyawan3',
            'pass' => Hash::make('karyawan3'),
            'role' => "karyawan",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
