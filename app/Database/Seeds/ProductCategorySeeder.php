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
                'nama_merk' => 'Laptop',
                'nama_sepatu' => 'Perangkat komputer portabel.',
            ],
            [
                'nama_kategori' => 'Elektronik',
                'nama_merk' => 'Smartphone',
                'nama_sepatu' => 'Telepon pintar dengan berbagai fitur.',
            ],
            [
                'nama_kategori' => 'Peralatan Rumah Tangga',
                'nama_merk' => 'Kulkas',
                'nama_sepatu' => 'Alat untuk menyimpan makanan agar tetap segar.',
            ],
            [
                'nama_kategori' => 'Peralatan Rumah Tangga',
                'nama_merk' => 'Mesin Cuci',
                'nama_sepatu' => 'Alat untuk mencuci pakaian.',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_merk' => 'Sepeda',
                'nama_sepatu' => 'Kendaraan roda dua tanpa mesin.',
            ],
            [
                'nama_kategori' => 'Olahraga',
                'nama_merk' => 'Bola Sepak',
                'nama_sepatu' => 'Bola yang digunakan untuk bermain sepak bola.',
            ],
            [
                'nama_kategori' => 'Furnitur',
                'nama_merk' => 'Meja',
                'nama_sepatu' => 'Perabot untuk menaruh barang.',
            ],
            [
                'nama_kategori' => 'Furnitur',
                'nama_merk' => 'Kursi',
                'nama_sepatu' => 'Perabot untuk duduk.',
            ],
            [
                'nama_kategori' => 'Alat Tulis',
                'nama_merk' => 'Pulpen',
                'nama_sepatu' => 'Alat untuk menulis dengan tinta.',
            ],
            [
                'nama_kategori' => 'Alat Tulis',
                'nama_merk' => 'Buku',
                'nama_sepatu' => 'Kumpulan kertas untuk menulis atau membaca.',
            ],
        ];

        // Insert data ke tabel product_category
        $this->db->table('product_category')->insertBatch($data);
    }
}