# Mini E-Commerce (ClickCommerce) - README
README ini memberikan gambaran tentang aplikasi Mini E-Commerce yang dikembangkan dengan merek ClickCommerce. Aplikasi ini dibangun menggunakan framework Laravel dan mencakup beberapa fitur, termasuk autentikasi, otorisasi, login, dan registrasi.

Daftar Isi
Pendahuluan
Fitur
Peran Pengguna
Prasyarat
Instalasi
Penggunaan
Kontribusi
Lisensi
Pendahuluan
Mini E-Commerce, yang menggunakan merek ClickCommerce, adalah aplikasi yang dirancang untuk memfasilitasi belanja online. Aplikasi ini menyediakan antarmuka yang mudah digunakan bagi pengguna untuk menjelajahi dan membeli produk. Aplikasi ini dibangun dengan menggunakan framework Laravel, yang menjamin pengalaman pengembangan yang kuat dan efisien.

Fitur
Aplikasi Mini E-Commerce (ClickCommerce) menawarkan fitur-fitur berikut:

Autentikasi: Pengguna dapat membuat akun dan melakukan login untuk mengakses seluruh fungsionalitas aplikasi.
Otorisasi: Aplikasi membedakan antara pengguna biasa dan administrator, masing-masing dengan hak aksesnya sendiri.
Login/Register: Pengguna dapat membuat akun baru atau melakukan login dengan kredensial yang sudah ada.
Hak Akses Pengguna Biasa:
Menambahkan produk ke keranjang.
Menelusuri dan melihat produk yang tersedia.
Mensimulasikan proses gateway pembayaran.
Hak Akses Admin:
Akses ke halaman khusus admin untuk mengelola stok produk dengan fitur CRUD (Create, Read, Update, Delete).
Peran Pengguna
Aplikasi Mini E-Commerce (ClickCommerce) mendefinisikan dua peran pengguna:

Pengguna Biasa: Peran ini mewakili pengguna umum aplikasi yang dapat menjelajahi dan membeli produk.
Admin: Peran ini secara khusus diberikan kepada administrator yang memiliki hak akses tambahan untuk mengelola stok produk.
Prasyarat
Untuk menjalankan aplikasi Mini E-Commerce (ClickCommerce) secara lokal, pastikan Anda memiliki prasyarat berikut terpasang:

PHP (>= 7.3)
Composer
Laravel (>= 8.x)
Database (misalnya MySQL, PostgreSQL, SQLite)
Instalasi
Ikuti langkah-langkah berikut untuk mengatur aplikasi:

Clone repositori ke mesin lokal Anda:

shell
Copy code
git clone https://github.com/your-username/mini-ecommerce.git
Masuk ke direktori proyek:

shell
Copy code
cd mini-ecommerce
Pasang dependensi menggunakan Composer:

shell
Copy code
composer install
Buat salinan file .env.example dan ubah namanya menjadi .env:

shell
Copy code
cp .env.example .env
Generate kunci aplikasi:

shell
Copy code
php artisan key:generate
Konfigurasi pengaturan database di file .env sesuai dengan lingkungan Anda.

Jalankan migrasi database:

shell
Copy code
php artisan migrate
Opsional: Isi database dengan data contoh:

shell
Copy code
php artisan db:seed
Jalankan aplikasi:

shell
Copy code
php artisan serve
Akses aplikasi dengan membuka http://localhost:8000 di peramban web Anda.

Penggunaan
Setelah aplikasi berjalan, Anda dapat melakukan tugas-tugas berikut berdasarkan peran pengguna:

Pengguna Biasa:

Buat akun atau login dengan kredensial yang sudah ada.
Jelajahi dan lihat produk yang tersedia.
Tambahkan produk yang diinginkan ke dalam keranjang.
Simulasikan proses gateway pembayaran untuk tujuan pengujian.
Admin:

Login dengan kredensial admin.
Akses halaman admin stock manager.
Lakukan operasi CRUD (Create, Read, Update, Delete) pada produk:
Buat produk baru.
Baca produk yang sudah ada.
Perbarui detail produk.
Hapus produk.
Kontribusi
Kontribusi untuk aplikasi Mini E-Commerce (ClickCommerce) sangat diterima. Jika Anda menemui masalah atau memiliki saran untuk perbaikan, silakan ajukan sebagai masalah GitHub di repositori ini. Anda juga dapat melakukan fork repositori dan membuat pull request untuk fitur baru atau perbaikan bug.

Lisensi
Aplikasi Mini E-Commerce (ClickCommerce) adalah perangkat lunak sumber terbuka yang dilisensikan di bawah Lisensi MIT. Lihat berkas LICENSE untuk informasi lebih lanjut.
