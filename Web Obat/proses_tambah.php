<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$nama_obat   = $_POST['nama_obat'];
$berat     = $_POST['berat'];
$kategori    = $_POST['kategori'];
$harga_jual    = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO produk (nama_obat, berat, kategori, harga_jual, jumlah) VALUES ('$nama_obat', '$berat', '$kategori', '$harga_jual', '$jumlah')";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
