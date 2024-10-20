NAMA : MOH. ARBI ARDIANSYAH

NIM : 362358302150

KELAS : 2B TRPL

Praktikum Interoperabilitas: Membuat API Toko Buku dengan Laravel 11 dan Testing Menggunakan Postman

1.Saya sudah Menginstall PHP, Composer, dan MySQL.

  Dan saya buka http://localhost:8000 untuk memverifikasi instalasi berhasil.
  ![alt text](images/gambar1.png)


2.Saya membuat API CRUD untuk Sistem Toko Buku

Membuat Migration dan Model

1. Kategori: Menambahkan dan menampilkan kategori buku.
2. Buku: Mengelola informasi buku (judul, penulis, harga, stok, dan kategori).

Kemudian saya membuat Controller API untuk Kategori dan Buku

Setelah itu saya Menambahkan Route API
![](images/gambar2.png)

3.Selanjutnya saya Testing API dengan Postman

GET Semua Kategori
![](images/gambar3.png)

POST Tambah Kategori Baru
![](images/gambar4.png)

GET Semua Buku
![](images/gambar5.png)

POST Tambah Buku Baru
![](images/gambar6.png)

GET Buku Berdasarkan ID
![](images/gambar7.png)

PUT Update Data Buku
![](images/gambar8.png)

DELETE Hapus Buku

![](images/gambar9.png)

TUGAS!!!

1.Validasi Tambahan
Untuk menambahkan validasi bahwa nama buku tidak boleh kosong dan harga minimal Rp 1.000, saya memodifikasi validasi di dalam BukuController

![](images/gambar10.png)
![](images/gambar11.png)

2.Merancang Endpoint Baru untuk Pencarian Buku Berdasarkan Kategori atau Judul

Saya Menambahkan metode baru bernama search di dalam BukuController.php.
![](images/gambar12.png)

Saya Menambahkan route untuk mencari buku
![](images/gambar13.png)

Hasil di Postman

![](images/gambar14.png)

3.Uji API Secara Publik:

![](images/gambar16.png)