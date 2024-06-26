# Kasir PHP

Ini adalah aplikasi kasir sederhana yang dibangun menggunakan PHP. Aplikasi ini memungkinkan pengguna untuk mengelola transaksi penjualan secara mudah melalui antarmuka web.

## Fitur Utama

- **Pendaftaran Produk:** Pengguna dapat mendaftarkan produk baru dengan informasi harga, stok, dan kategori.
- **Penambahan ke Keranjang:** Produk dapat ditambahkan ke dalam keranjang belanja dengan jumlah yang diinginkan.
- **Penghitungan Total Belanja:** Aplikasi akan menghitung total harga dari semua produk yang ada di keranjang belanja.
- **Checkout:** Pengguna dapat melakukan proses checkout untuk menyelesaikan transaksi dengan detail lengkap seperti nama, alamat, dan metode pembayaran.
- **Riwayat Transaksi:** Sistem akan menyimpan riwayat transaksi sehingga pengguna dapat melihat atau mencetaknya di kemudian hari.
- **Halaman Admin:** Halaman khusus admin untuk manajemen produk (tambah, edit, hapus) dan melihat riwayat transaksi.

## Instalasi

1. **Persiapan Lingkungan:**
   - Pastikan PHP (versi 7.x atau lebih baru) dan MySQL (atau database lain yang mendukung PDO) terinstal di komputer Anda.
   - Pastikan web server seperti Apache atau Nginx sudah terpasang dan berjalan.

2. **Clone Repositori:**
   - Clone repositori ini ke dalam direktori web server Anda:
     ```
     git clone https://github.com/username/kasir-php.git
     ```

3. **Impor Database:**
   - Impor struktur database yang tersedia (`kasir.sql`) ke dalam MySQL.
     ```
     mysql -u username -p kasir_db < kasir.sql
     ```
   - Pastikan untuk mengganti `username` dengan pengguna MySQL Anda dan `kasir_db` dengan nama database yang Anda gunakan.

4. **Konfigurasi Koneksi Database:**
   - Sesuaikan konfigurasi koneksi database pada file `config.php` dengan detail database yang Anda gunakan:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'username');
     define('DB_PASS', 'password');
     define('DB_NAME', 'kasir_db');
     ```

5. **Uji Coba Aplikasi:**
   - Buka aplikasi melalui browser:
     ```
(http://localhost/kasir%20shop/api/items.php?id=1\n!) (http://localhost/kasir/index.php)
     ```
   - Pastikan aplikasi dapat diakses tanpa error dan fungsionalitasnya berjalan dengan baik.

## Mengatasi Masalah Umum

### 1. Masalah Koneksi Database

Jika aplikasi tidak dapat terhubung ke database, pastikan Anda telah memeriksa:
   - Detail koneksi database pada `config.php` sudah benar.
   - Pengguna MySQL memiliki izin yang cukup untuk akses ke database.
   - Pastikan MySQL server berjalan dengan baik.

### 2. Error PHP Tidak Ditemukan

Jika menerima pesan error "PHP file not found" atau sejenisnya:
   - Pastikan file-file PHP dalam direktori proyek sudah lengkap dan tidak ada yang terhapus.
   - Periksa konfigurasi web server Anda untuk memastikan bahwa direktori proyek diakses dengan benar.

### 3. Masalah Permission

Jika aplikasi tidak dapat menulis atau membaca file tertentu:
   - Pastikan bahwa direktori tempat menyimpan file-file seperti gambar produk memiliki izin yang sesuai (biasanya chmod 755 untuk direktori dan 644 untuk file).

## Kontribusi

Anda dipersilakan untuk melakukan kontribusi dengan cara melakukan pull request ke repositori ini. Silakan buat branch baru untuk setiap fitur atau perbaikan yang ingin Anda usulkan.

## Penulis

Dibuat oleh [I Kadek Yoga Pradnyana](https://github.com/username).

Terima kasih telah menggunakan aplikasi Kasir PHP!
