<?php
include('koneksi.php'); // penghubung antara index dengan database

?>
<!DOCTYPE html>
<html>

<head>
  <title>Web Pendataan Obat</title>
  <link rel="stylesheet" href="Assets/style.css">
</head>

<body>
  <center>
    <h1>Pendataan Obat</h1>
    <center>
      <center><a href="tambah_obat.php">Tambahkan Obat</a>
        <center>
          <br />
          <table>
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Berat</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Jumlah</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id secara descending
              $query = "SELECT * FROM produk ORDER BY id DESC";
              $result = mysqli_query($koneksi, $query);
              //mengecek apakah ada error ketika menjalankan query
              if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                  " - " . mysqli_error($koneksi));
              }

              //buat perulangan untuk element tabel dari data mahasiswa
              $no = 1; //variabel untuk membuat nomor urut
              // hasil query akan disimpan dalam variabel $data dalam bentuk array
              // kemudian dicetak dengan perulangan while
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_obat']; ?></td>
                  <td><?php echo $row['berat']; ?> Gram</td>
                  <td><?php echo $row['kategori']; ?></td>
                  <td>Rp <?= number_format($row['harga_jual'], 2, ',', '.'); ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td>
                    <a href="edit_obat.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                  </td>
                </tr>

              <?php
                $no++; //untuk nomor urut terus bertambah 1
              }
              ?>
            </tbody>
          </table>
</body>

</html>