<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$id = $_POST['id'];
$nama_obat   = $_POST['nama_obat'];
$berat     = $_POST['berat'];
$kategori    = $_POST['kategori'];
$harga_jual    = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];

// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE produk SET nama_obat = '$nama_obat', berat = '$berat', kategori = '$kategori', harga_jual = '$harga_jual', jumlah = '$jumlah'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
}
