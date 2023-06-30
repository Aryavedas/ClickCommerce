# Mini E-Commerce (ClickCommerce) - README

## Daftar Isi
1. [Pendahuluan](#1-pendahuluan)
2. [Fitur](#2-fitur)
3. [Peran Pengguna](#3-peran-pengguna)
4. [Prasyarat](#4-prasyarat)
5. [Instalasi](#5-instalasi)
6. [Penggunaan](#6-penggunaan)
7. [Kontribusi](#7-kontribusi)
8. [Lisensi](#8-lisensi)

## 1. Pendahuluan
Mini E-Commerce, yang menggunakan merek ClickCommerce, adalah aplikasi yang dirancang untuk memfasilitasi belanja online. Aplikasi ini menyediakan antarmuka yang mudah digunakan bagi pengguna untuk menjelajahi dan membeli produk. Aplikasi ini dibangun dengan menggunakan framework Laravel, yang menjamin pengalaman pengembangan yang kuat dan efisien.

## 2. Fitur
Aplikasi Mini E-Commerce (ClickCommerce) menawarkan fitur-fitur berikut:

- **Autentikasi**: Pengguna dapat membuat akun dan login untuk mengakses seluruh fungsionalitas aplikasi.
- **Otorisasi**: Aplikasi membedakan antara pengguna biasa dan administrator, masing-masing dengan hak aksesnya sendiri.
- **Login/Register**: Pengguna dapat membuat akun baru atau login dengan kredensial yang sudah ada.
- **Hak Akses Pengguna Biasa**:
  - Menambahkan produk ke keranjang.
  - Menelusuri dan melihat produk yang tersedia.
  - Mensimulasikan proses gateway pembayaran untuk tujuan pengujian.
- **Hak Akses Admin**:
  - Akses ke halaman khusus admin untuk mengelola stok produk dengan fitur CRUD (Create, Read, Update, Delete).
- **Laravel Livewire**
- **Laravel Vite**
- **Simulasi Payment Gateway Dengan Midtrans https://docs.midtrans.com/docs/testing-payment-on-sandbox**

## 3. Peran Pengguna
Aplikasi Mini E-Commerce (ClickCommerce) mendefinisikan dua peran pengguna:

1. **Pengguna Biasa**: Peran ini mewakili pengguna umum aplikasi yang dapat menjelajahi dan membeli produk.
2. **Admin**: Peran ini secara khusus diberikan kepada administrator yang memiliki hak akses tambahan untuk mengelola stok produk.

## 4. Prasyarat
Untuk menjalankan aplikasi Mini E-Commerce (ClickCommerce) secara lokal, pastikan Anda memiliki prasyarat berikut terpasang:

- PHP (>= 7.3)
- Composer
- Laravel (>= 8.x)
- Database (misalnya MySQL, PostgreSQL, SQLite)

## 5. Instalasi
Ikuti langkah-langkah berikut untuk mengatur aplikasi:

1. Clone repositori ke mesin lokal Anda:
git clone https://github.com/your-username/mini-ecommerce.git


2. Masuk ke direktori proyek:
cd mini-ecommerce


3. Pasang dependensi menggunakan Composer:
composer install


4. Buat salinan file `.env.example` dan ubah namanya menjadi `.env`:
cp .env.example .env


5. Generate kunci aplikasi:
php artisan key:generate


6. Konfigurasi pengaturan database di file `.env` sesuai dengan lingkungan Anda.

7. Jalankan migrasi database:
php artisan migrate


8. Opsional: Isi database dengan data contoh:
php artisan db:seed


9. Jalankan aplikasi:
php artisan serve


10. Akses aplikasi dengan membuka `http://localhost:8000` di peramban web Anda.

## 6. Penggunaan
Setelah aplikasi berjalan, Anda dapat melakukan tugas-tugas berikut berdasarkan peran pengguna:

- **Pengguna Biasa**:
- Buat akun atau login dengan kredensial yang sudah ada.
- Jelajahi dan lihat produk yang tersedia.
- Tambahkan produk yang diinginkan ke dalam keranjang.
- Simulasikan proses gateway pembayaran untuk tujuan pengujian.

- **Admin**:
- Login dengan kredensial admin.
- Akses halaman admin untuk mengelola stok.
- Lakukan operasi CRUD (Create, Read, Update, Delete) pada produk:
 - Buat produk baru.
 - Baca produk yang sudah ada.
 - Perbarui detail produk.
 - Hapus produk.

## 7. Kontribusi
Kontribusi untuk aplikasi Mini E-Commerce (ClickCommerce) sangat diterima. Jika Anda menemui masalah atau memiliki saran untuk perbaikan, silakan ajukan sebagai masalah GitHub di repositori ini. Anda juga dapat melakukan fork repositori dan membuat pull request untuk fitur baru atau perbaikan bug.

## 8. Lisensi
Aplikasi Mini E-Commerce (ClickCommerce) adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://opensource.org/licenses/MIT). Lihat berkas [LICENSE](LICENSE) untuk informasi lebih lanjut.

