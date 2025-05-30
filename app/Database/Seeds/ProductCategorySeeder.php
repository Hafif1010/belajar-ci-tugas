<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Elektronik',
                'nama_benda' => 'Laptop',
                'deskripsi' => 'Perangkat komputer portabel.',
            ],
            [
                'nama_kategori' => 'Elektronik',
                'nama_benda' => 'Smartphone',
                'deskripsi' => 'Telepon pintar dengan berbagai fitur.',
            ],
            [
                'nama_kategori' => 'Peralatan Rumah Tangga',
                'nama_benda' => 'Kulkas',
                'deskripsi' => 'Alat untuk menyimpan makanan agar tetap segar.',
            ],
            [
                'nama_kategori' => 'Peralatan Rumah Tangga',
                'nama_benda' => 'Mesin Cuci',
                'deskripsi' => 'Alat untuk mencuci pakaian.',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_benda' => 'Sepeda',
                'deskripsi' => 'Kendaraan roda dua tanpa mesin.',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_benda' => 'Bola Sepak',
                'deskripsi' => 'Bola yang digunakan untuk bermain sepak bola.',
            ],
            [
                'nama_kategori' => 'Furnitur',
                'nama_benda' => 'Meja',
                'deskripsi' => 'Perabot untuk menaruh barang.',
            ],
            [
                'nama_kategori' => 'Furnitur',
                'nama_benda' => 'Kursi',
                'deskripsi' => 'Perabot untuk duduk.',
            ],
            [
                'nama_kategori' => 'Alat Tulis',
                'nama_benda' => 'Pulpen',
                'deskripsi' => 'Alat untuk menulis dengan tinta.',
            ],
            [
                'nama_kategori' => 'Alat Tulis',
                'nama_benda' => 'Buku',
                'deskripsi' => 'Kumpulan kertas untuk menulis atau membaca.',
            ],
        ];

        // Insert data ke tabel product_category
        $this->db->table('product_category')->insertBatch($data);
    }
}