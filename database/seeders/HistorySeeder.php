<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('histories')->insert([
            'product_id' => 1,
            'status' => 'Barang Telah Di Input Oleh Supplier 1',
            'qty' => 15,
            'user_id' => 1,
            'supplier_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('histories')->insert([
            'product_id' => 2,
            'status' => 'Barang Telah Di Input Oleh Supplier 2',
            'qty' => 20,
            'user_id' => 2,
            'supplier_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('histories')->insert([
            'product_id' => 3,
            'status' => 'Barang Telah Di Input Oleh Supplier 3',
            'qty' => 25,
            'user_id' => 3,
            'supplier_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('histories')->insert([
            'product_id' => 4,
            'status' => 'Barang Telah Di Input Oleh Supplier 4',
            'qty' => 30,
            'user_id' => 4,
            'supplier_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('histories')->insert([
            'product_id' => 5,
            'status' => 'Barang Telah Di Input Oleh Supplier 5',
            'qty' => 35,
            'user_id' => 5,
            'supplier_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
