# TOKO HAFIF Berbasis CodeIgniter 4
## Hafif Hida

Proyek ini adalah implementasi platform toko online modern yang dikembangkan menggunakan framework PHP terkemuka, CodeIgniter 4. Sistem ini dirancang untuk menyediakan pengalaman pembelian produk yang efisien dan komprehensif, mulai dari penjelajahan produk hingga manajemen transaksi.

## Daftar Isi
    Fitur Utama

    Persyaratan Sistem

    Panduan Instalasi

    Struktur Direktori Proyek

## Fitur Utama
Aplikasi TOKO HAFIF ini menyediakan berbagai fitur untuk mendukung operasional toko online secara optimal:

    Katalog Produk Interaktif

        Menampilkan produk dengan visual menarik, lengkap dengan gambar dan detail penting.

        Fitur pencarian produk yang cepat dan responsif.

    Manajemen Keranjang Belanja

        Pengguna dapat menambah atau menghapus produk dari keranjang.

        Tersedia opsi untuk memperbarui jumlah produk dalam keranjang.

    Sistem Transaksi Lengkap

        Proses checkout yang mudah dan terstruktur.

        Setiap pengguna dapat melihat riwayat transaksi mereka.

    Panel Admin Komprehensif

        Manajemen Produk (CRUD): Fitur lengkap untuk mengelola data produk (Create, Read, Update, Delete).

        Manajemen Kategori: Mengelola kategori produk agar lebih terorganisir.

        Laporan Transaksi: Dapat membuat laporan transaksi yang bisa diekspor ke format PDF.

        Manajemen Diskon: Menambah, mengedit, dan menghapus data diskon dengan mudah.

        Pencatatan Detail Transaksi: Menyimpan data detail untuk setiap item dalam transaksi.

    Sistem Autentikasi Pengguna

        Fitur login dan registrasi yang aman untuk pengguna.

        Pengelolaan profil serta informasi akun pengguna.

    Antarmuka Pengguna Responsif

        Desain UI yang menyesuaikan di berbagai perangkat, menggunakan template Admin NiceAdmin.

## Persyaratan Sistem
Agar aplikasi dapat berjalan, pastikan lingkungan pengembangan Anda memenuhi spesifikasi berikut:

    PHP: Minimal versi 7.4.

    Composer: Alat untuk mengelola dependensi PHP.

    Web Server: Disarankan menggunakan XAMPP (untuk Apache dan MySQL).

## Panduan Instalasi
Ikuti langkah-langkah berikut untuk mengatur dan menjalankan proyek TOKO HAFIF di komputer Anda:

    Kloning Repositori:
    Bash

git clone https://github.com/Hafif1010/belajar-ci-tugas.git
cd belajar-ci-tugas

Instal Dependensi:
Bash

composer install

Konfigurasi Database:

    Aktifkan modul Apache dan MySQL pada aplikasi XAMPP Anda.

    Buat database baru bernama db_ci4 melalui phpMyAdmin atau klien database lain.

    Salin file .env dari panduan tutorial untuk konfigurasi lingkungan. Pastikan pengaturan database di file .env sudah sesuai dengan server MySQL Anda.

        Lihat tutorial ini untuk detail lebih lanjut: https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

Jalankan Migrasi Database:
Bash

php spark migrate

Isi Data Awal (Seeding):
Bash

php spark db:seed ProductSeeder
php spark db:seed UserSeeder
php spark db:seed ProductcategorySeeder
php spark db:seed DiscountSeeder

Mulai Server Pengembangan:
Bash

    php spark serve

    Akses Aplikasi:
    Buka browser Anda dan kunjungi http://localhost:8080 untuk melihat aplikasi.

## Struktur Direktori Proyek
Proyek ini menggunakan arsitektur Model-View-Controller (MVC) yang menjadi dasar CodeIgniter 4. Berikut penjelasan singkat direktori utama:

    app/Controllers/ - Berisi logika aplikasi dan menangani permintaan HTTP.

        AuthController.php: Mengelola seluruh proses autentikasi pengguna, termasuk login dan logout.

        ProdukController.php: Bertanggung jawab atas pengelolaan produk, seperti menampilkan daftar, menambah, mengedit, dan menghapus produk.

        TransaksiController.php: Mengelola proses transaksi, mulai dari detail hingga checkout.

        ApiController.php: Menangani permintaan API, misalnya mengambil data penjualan dan diskon.

        BaseController.php: Kelas dasar yang menyediakan fungsi umum untuk controller lain.

        ContactController.php: Mengatur tampilan halaman kontak.

        DiscountController.php: Mengelola data diskon, termasuk menampilkan, menambah, mengedit, dan menghapus diskon.

        FaqController.php: Mengelola tampilan halaman FAQ (Frequently Asked Questions).

        Home.php: Controller utama untuk halaman beranda aplikasi.

        KategoriProdukController.php: Bertanggung jawab atas manajemen kategori produk, seperti menampilkan, menambah, mengedit, dan menghapus kategori.

        ProfileController.php: Mengelola tampilan profil pengguna dan detail transaksi mereka.

    app/Database/Migrations/ - Berisi definisi perubahan skema database (versi database).

        User.php: Skrip migrasi untuk tabel users, mengatur kolom seperti username, password, dan role.

        Product.php: Skrip migrasi untuk tabel products, mengatur kolom seperti nama, harga, jumlah, dan foto.

        Transaction.php: Skrip migrasi untuk tabel transactions, mengatur kolom seperti nama_pembeli, total_harga, alamat, ongkir, dan status.

        TransactionDetail.php: Skrip migrasi untuk tabel transaction_details, menyimpan detail setiap item transaksi, termasuk transaction_id, product_id, jumlah, diskon, dan subtotal_harga.

        Productcategory.php: Skrip migrasi untuk tabel product_categories, mengatur kolom nama_kategori.

        Discount.php: Skrip migrasi untuk tabel discounts, mengatur kolom tanggal dan nominal diskon.

    app/Database/Seeds/ - Digunakan untuk mengisi data awal atau data dummy ke tabel database.

        ProductSeeder.php: Mengisi tabel products dengan data produk awal.

        UserSeeder.php: Mengisi tabel users dengan data pengguna awal, termasuk akun admin default atau akun uji.

        ProductcategorySeeder.php: Mengisi tabel product_categories dengan data kategori produk awal.

        DiscountSeeder.php: Mengisi tabel discounts dengan data diskon awal, misalnya 10 data diskon untuk 9 hari ke depan.

    app/Models/ - Berisi model yang menjadi penghubung aplikasi dengan database, mengelola interaksi data.

        ProductModel.php: Model untuk berinteraksi dengan tabel produk.

        UserModel.php: Model untuk berinteraksi dengan tabel pengguna.

        (Jika ada model lain seperti TransactionModel, TransactionDetailModel, ProductCategoryModel, DiscountModel, tambahkan di sini.)

    app/Views/ - Menyimpan semua file tampilan (template) dan komponen antarmuka pengguna aplikasi.

        v_home.php: Tampilan halaman beranda toko.

        v_produk.php: Tampilan halaman daftar produk.

        v_keranjang.php: Tampilan halaman keranjang belanja.

        v_discount.php: Tampilan halaman manajemen diskon.

        layout.php: Template tata letak utama aplikasi.

        components/header.php: Komponen header aplikasi.

        components/sidebar.php: Komponen sidebar navigasi.

        components/footer.php: Komponen footer aplikasi.        

    public/img/ - Menyimpan semua aset gambar yang digunakan aplikasi, termasuk gambar produk.

    public/NiceAdmin/ - Berisi aset frontend dari template NiceAdmin, seperti file CSS, JavaScript, font, dan gambar template.