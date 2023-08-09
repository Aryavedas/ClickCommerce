# Mini E-Commerce (ClickCommerce) - README

## Daftar Isi
1. [Pendahuluan](#1-pendahuluan)
2. [Preview](#2-preview)
3. [Fitur](#2-fitur)
4. [Peran Pengguna](#3-peran-pengguna)
5. [Prasyarat](#4-prasyarat)
6. [Instalasi](#5-instalasi)
7. [Penggunaan](#6-penggunaan)
8. [Kontribusi](#7-kontribusi)
9. [Lisensi](#8-lisensi)

## 1. Pendahuluan
Mini E-Commerce, yang menggunakan merek ClickCommerce, adalah aplikasi yang dirancang untuk memfasilitasi belanja online. Aplikasi ini menyediakan antarmuka yang mudah digunakan bagi pengguna untuk menjelajahi dan membeli produk. Aplikasi ini dibangun dengan menggunakan framework Laravel, yang menjamin pengalaman pengembangan yang kuat dan efisien.

## 2. Preview
![home page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/19665af0-2503-4801-865e-9da57c70e4e0)


## 3. Fitur
Aplikasi Mini E-Commerce (ClickCommerce) menawarkan fitur-fitur berikut:

- **Autentikasi**: Pengguna dapat membuat akun dan login untuk mengakses seluruh fungsionalitas aplikasi.
- **Otorisasi**: Aplikasi membedakan antara pengguna biasa dan administrator, masing-masing dengan hak aksesnya sendiri.
- **Login/Register**: Pengguna dapat membuat akun baru atau login dengan kredensial yang sudah ada.
    ![login page7](https://github.com/Aryavedas/ClickCommerce/assets/120029429/91bcd3a1-dfdd-44bd-bc71-02705b6c1991)

- **Hak Akses Pengguna Biasa**:
  - Menambahkan produk ke keranjang.
    ![checkout page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/cbf1b3ce-87f6-4c07-a540-c75f62279f54)

  - Menelusuri dan melihat produk yang tersedia.
    ![product page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/4cac5119-af4b-4fd1-82a5-0eada0a36955)

  - Mensimulasikan proses gateway pembayaran untuk tujuan pengujian.
    ![payment method](https://github.com/Aryavedas/ClickCommerce/assets/120029429/483b2279-8cc2-4697-b4b0-03753abc7048)

- **Hak Akses Admin**:
  - Akses ke halaman khusus admin untuk mengelola stok produk dengan fitur CRUD (Create, Read, Update, Delete).
    ![admin dashboard page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/e837340b-871e-49a1-be66-dd4538cbf47a)
    ![create page](https://github.com/Aryavedas/ClickCommerce/assets/120029429/b3850962-3c26-4480-8696-b88f6a576898)

- **Laravel Livewire**
- **Laravel Vite**
- **Simulasi Payment Gateway Dengan Midtrans https://docs.midtrans.com/docs/testing-payment-on-sandbox**

## 4. Peran Pengguna
Aplikasi Mini E-Commerce (ClickCommerce) mendefinisikan dua peran pengguna:

1. **Pengguna Biasa**: Peran ini mewakili pengguna umum aplikasi yang dapat menjelajahi dan membeli produk.
2. **Admin**: Peran ini secara khusus diberikan kepada administrator yang memiliki hak akses tambahan untuk mengelola stok produk.

## 5. Prasyarat
Untuk menjalankan aplikasi Mini E-Commerce (ClickCommerce) secara lokal, pastikan Anda memiliki prasyarat berikut terpasang:

- PHP (>= 7.3)
- Composer
- Laravel (>= 8.x)
- Database (misalnya MySQL, PostgreSQL, SQLite)

## 6. Instalasi
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

## 7. Penggunaan
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

## 8. Kontribusi
Kontribusi untuk aplikasi Mini E-Commerce (ClickCommerce) sangat diterima. Jika Anda menemui masalah atau memiliki saran untuk perbaikan, silakan ajukan sebagai masalah GitHub di repositori ini. Anda juga dapat melakukan fork repositori dan membuat pull request untuk fitur baru atau perbaikan bug.

## 9. Lisensi
Aplikasi Mini E-Commerce (ClickCommerce) adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [Lisensi MIT](https://opensource.org/licenses/MIT). Lihat berkas [LICENSE](LICENSE) untuk informasi lebih lanjut.

