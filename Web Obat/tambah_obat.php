<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Obat</title>
  <style type="text/css">
    * {
      font-family: "Trebuchet MS", sans-serif;
    }

    body {
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }

    center {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    h1 {
      text-transform: uppercase;
      color: #e44d26;
    }

    button {
      background-color: #e44d26;
      color: #fff;
      padding: 12px;
      font-size: 14px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 20px;
    }

    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }

    input {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #fff;
      border: 1px solid #ccc;
      outline-color: #e44d26;
      border-radius: 5px;
      margin-top: 5px;
    }

    div {
      width: 100%;
      height: auto;
    }

    .base {
      max-width: 400px;
      padding: 20px;
      margin: 20px auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    a {
      display: inline-block;
      background-color: #e44d26;
      color: #fff;
      padding: 12px 15px;
      text-decoration: none;
      font-size: 14px;
      border-radius: 5px;
      margin: 10px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #333;
    }

    button:hover {
      background-color: #333;
    }
  </style>
</head>

<body>
  <center>
    <h1>Tambah Obat</h1>
    <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
          <div>
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" autofocus="" required />
          </div>
          <div>
            <label>Berat</label>
            <input type="number" name="berat" required />
          </div>
          <div>
            <label>Kategori</label>
            <input type="text" name="kategori" required />
          </div>
          <div>
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" required />
          </div>
          <div>
            <label>Jumlah</label>
            <input type="number" name="jumlah" required />
          </div>
          <div>
            <a href="index.php">Kembali</a>
            <button type="submit" style="cursor: pointer;">Tambahkan</button>
          </div>
        </section>
      </form>
</body>

</html>