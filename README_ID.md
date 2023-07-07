# Aplikasi Profile Manager

Aplikasi Profile Manager adalah sebuah aplikasi berbasis web yang memungkinkan pengguna untuk mendaftarkan diri dengan mengisi beberapa inputan form serta mengupload gambar profil. Setiap pengguna dapat melihat profil pengguna lain, tetapi hanya dapat mengedit data pengguna mereka sendiri. Hal ini dikendalikan melalui pembatasan hak akses yang diterapkan.

**Disclaimer: Aplikasi ini dikembangkan hanya untuk tujuan pembelajaran. Ini adalah aplikasi yang fokus dengan konsep RESTful CRUD Laravel dan boleh dikembangkan lebih lanjut.**

## Fitur Utama

- Pendaftaran Pengguna: Pengguna dapat mendaftarkan diri dengan mengisi formulir pendaftaran dan mengupload gambar profil.
- Tampilan Profil: Setiap pengguna memiliki tampilan profil yang menampilkan informasi yang diisi dalam formulir pendaftaran.
- Edit Profil: Pengguna dapat mengedit data mereka sendiri, termasuk informasi pengguna dan gambar profil.
- Hak Akses: Hanya pengguna yang dapat mengedit profil mereka sendiri, sementara pengguna lain dapat melihat profil pengguna lainnya.

## Materi Laravel yang Dicakup

Aplikasi ini mencakup materi-materi Laravel berikut ini:

- Konsep Model-View-Controller (MVC) dalam Laravel.
- Penggunaan Blade, template engine Laravel, untuk menghasilkan tampilan aplikasi.
- Integrasi Laravel Vite untuk membangun dan mengelola sisi frontend aplikasi.
- Migration untuk mengatur skema database aplikasi.
- Penggunaan Eloquent ORM untuk mengakses dan memanipulasi data dalam database.
- Pengolahan formulir dan validasi input menggunakan fitur Laravel.
- Lokalisasi aplikasi untuk mendukung multiple bahasa.
- Pengelolaan unggahan berkas (file upload) menggunakan Laravel.
- Middleware untuk menambahkan lapisan keamanan dan otentikasi dalam aplikasi.
- Pembatasan hak akses menggunakan Laravel Policy.

## Instalasi

1. Clone repositori ini ke dalam direktori lokal Anda:

git clone <repository-url>


2. Masuk ke direktori aplikasi:

cd aplikasi-profile-manager


3. Install semua dependensi menggunakan Composer:

composer install


4. Salin file `.env.example` dan ubah namanya menjadi `.env`. Sesuaikan konfigurasi database dengan pengaturan lokal Anda.

5. Generate kunci aplikasi Laravel:

php artisan key:generate


6. Jalankan migrasi untuk membuat tabel-tabel yang diperlukan:

php artisan migrate


7. Jalankan server pengembangan Laravel:

php artisan serve


8. Buka aplikasi di browser Anda dengan mengunjungi `http://localhost:8000`.

Pastikan untuk mengganti `<repository-url>` dengan URL repository asli aplikasi Anda. Selain itu, Anda dapat menyesuaikan instruksi instalasi dengan lingkungan dan preferensi pengembangan Anda.

**Catatan:** Pastikan telah memasang Composer dan memiliki lingkungan PHP yang sesuai sebelum menjalankan aplikasi ini.

Selamat mengembangkan aplikasi Profile Manager dengan Laravel!
Pastikan untuk mengganti <repository-url> dengan URL repository asli aplikasi Anda. Anda juga dapat menyesuaikan instruksi instalasi dengan lingkungan dan preferensi pengembangan Anda.

Selamat mengembangkan aplikasi Profile Manager dengan Laravel!
