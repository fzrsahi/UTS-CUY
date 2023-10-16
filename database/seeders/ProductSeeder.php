<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Makanan
        DB::table('products')->insert([
            [
                'nama' => 'Nasi Goreng',
                'kategori' => 'Makanan',
                'harga' => 20000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://1.bp.blogspot.com/-8Tm-eiIJU3M/Xb-XCJncpjI/AAAAAAAAAIc/w5WUOeqvZDoTEdnnLrOWlJ7VnLvRWVtSACEwYBhgL/s1600/cara-membuat-nasi-goreng-telur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mie Ayam',
                'kategori' => 'Makanan',
                'harga' => 15000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://i2.wp.com/angsarap.net/wp-content/uploads/2013/04/mie-ayam.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Gado-gado',
                'kategori' => 'Makanan',
                'harga' => 15000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://1.bp.blogspot.com/-hdzJZTQU8Y8/XovTD4iDzfI/AAAAAAAACVY/2IvYc5LzILw78-dk-0tzdrGnurw-j9wXwCLcBGAsYHQ/s1600/gado%2Bgado.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bakso',
                'kategori' => 'Makanan',
                'harga' => 10000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://th.bing.com/th/id/R.7eada36d2d9514f289cfe6a795fcc666?rik=y%2bgv3BRH8qNGKw&riu=http%3a%2f%2f1.bp.blogspot.com%2f-ykIvBvWWPl4%2fUkaG8gvWQcI%2fAAAAAAAAGko%2f4PwD5-3ax-k%2fs1600%2fbaksoikan3.jpg&ehk=qDnqCjQWDSK8osFHWmlSWh8rXfSFfGAqR9RFfnjgEp4%3d&risl=&pid=ImgRaw&r=0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Roti',
                'kategori' => 'Makanan',
                'harga' => 5000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://th.bing.com/th/id/R.d6e6032485fe05736a3050b2a0ad84bf?rik=k65Cv7VBEheskA&riu=http%3a%2f%2fal-karimcorporation.com%2fwp-content%2fuploads%2f2016%2f12%2fbakery-products.jpg&ehk=WZlXw0nF%2f068am3HOxsu3eZwixVSIPrqORtDCVNR%2b%2bQ%3d&risl=&pid=ImgRaw&r=0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Minuman
        DB::table('products')->insert([
            [
                'nama' => 'Air Mineral',
                'kategori' => 'Minuman',
                'harga' => 7000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://cf.shopee.co.id/file/8f9bc0f9140a0efc1ccdd3b2fccba25a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Es Teh Manis',
                'kategori' => 'Minuman',
                'harga' => 10000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://th.bing.com/th/id/R.88ac40d0128aacc038f58fae8f114fae?rik=pPDJHXkUHFbhRQ&riu=http%3a%2f%2finsomnia-karaoke.com%2fimages%2ffood%2fminuman%2fes_teh.jpg&ehk=kieRF6OgOz7mmZmRE%2bVpxJjk%2fkL5s4TX7%2fJuW%2fzedEk%3d&risl=&pid=ImgRaw&r=0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Cokelat Panas',
                'kategori' => 'Minuman',
                'harga' => 15000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://1.bp.blogspot.com/-EM6Em0jnzqk/X-QQBhUgOfI/AAAAAAAAFOM/wOSkgbUM_SsrE0K_nOko8US9TBOaw-MMQCLcBGAsYHQ/s1600/mug-chocolate-with-drips-wooden-table.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kopi',
                'kategori' => 'Minuman',
                'harga' => 10000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://blog.bookingtogo.com/wp-content/uploads/2020/11/jenis-kopi-di-Indonesia-dan-karakteristik-2048x1365.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jus Buah',
                'kategori' => 'Minuman',
                'harga' => 20000,
                "deskripsi" => "Barang Dari Toko",
                'qty' => 1,
                'photo' => 'https://awsimages.detik.net.id/community/media/visual/2016/09/12/554d4843-76c1-4650-9043-e17c6ac9e7c5.jpg?w=700&q=90',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}