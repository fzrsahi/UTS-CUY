<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        DB::table('suppliers')->insert([
            'nama' => "Supplier 1",
            'nomor_telepon' => '08123',
            'alamat' => 'Jl. Supplier 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('suppliers')->insert([
            'nama' => "Supplier 2",
            'nomor_telepon' => '08234',
            'alamat' => 'Jl. Supplier 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('suppliers')->insert([
            'nama' => "Supplier 3",
            'nomor_telepon' => '08345',
            'alamat' => 'Jl. Supplier 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('suppliers')->insert([
            'nama' => "Supplier 4",
            'nomor_telepon' => '08456',
            'alamat' => 'Jl. Supplier 4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('suppliers')->insert([
            'nama' => "Supplier 5",
            'nomor_telepon' => '08567',
            'alamat' => 'Jl. Supplier 5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
