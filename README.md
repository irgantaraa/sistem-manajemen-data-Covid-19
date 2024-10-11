# Sistem Manajemen Data Covid-19

Sistem ini adalah aplikasi berbasis web untuk manajemen data Covid-19 yang memungkinkan admin untuk mengelola informasi terkait kasus Covid-19 di suatu wilayah. Aplikasi ini memiliki fungsi untuk menambah, mengedit, dan menghapus data kasus Covid-19 serta menyediakan antarmuka pengguna yang mudah digunakan.

## Fitur

- **Login Admin**: Halaman login untuk mengautentikasi admin.
- **Dashboard**: Menampilkan data kasus Covid-19 dari berbagai daerah.
- **CRUD Data Covid-19**:
  - **Create**: Menambah data baru ke dalam sistem.
  - **Read**: Menampilkan data yang ada.
  - **Update**: Mengedit data yang sudah ada.
  - **Delete**: Menghapus data yang tidak diperlukan.
- **Keamanan**: Menggunakan session untuk menjaga keamanan data admin.

## Teknologi yang Digunakan

- **Bahasa Pemrograman**: PHP
- **Database**: MySQL
- **Front-End**: HTML, CSS, Bootstrap
- **Library**: jQuery

## Instalasi

1. **Clone Repository**:
   ```bash
   git clone https://github.com/username/repo.git
   cd repo
Setup Database:

Buat database baru di MySQL dengan nama covid.
Import file SQL (jika ada) yang berisi struktur tabel dan data awal.
Konfigurasi Koneksi Database:

Edit file koneksi.php untuk menyesuaikan dengan kredensial database Anda.
php
Copy code
$dbhost = "localhost";
$dbuser = "root";
$dbpass = '';
$dbname = "covid";

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
Jalankan Aplikasi:

Pastikan server web (seperti XAMPP atau MAMP) berjalan.
Akses aplikasi melalui browser di http://localhost/nama_folder.
Penggunaan
Akses halaman login di login_admin.php.
Masukkan username dan password admin untuk masuk.
Setelah berhasil login, Anda akan diarahkan ke dashboard untuk mengelola data Covid-19.
Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan fork repository ini dan ajukan pull request dengan fitur atau perbaikan yang ingin Anda buat.

Lisensi
Proyek ini dilisensikan di bawah MIT License.
