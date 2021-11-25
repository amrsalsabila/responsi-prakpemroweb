<?php
    session_start();
    $username=$_SESSION['username'];
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Home</title>
     <div class="header">    
        <h2>DAFTAR INVENTARIS BARANG <br> KANTOR SERBA ADA</h2>
    </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inventaris.php">Daftar Inventaris</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           List per Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="inventaris.php?status=bangunan">Bangunan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?status=kendaraan">Kendaraan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?status=alat tulis kantor">Alat Tulis Kantor</a></li>
            <li> <a class="dropdown-item" href="inventaris.php?status=elektronik">Elektronik</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
    <div class="logout">
      <a class="nav-link" href="logout.php">Logout</a>
    </div>
</nav>
</head>
<body>
<body>
    <br>
<div class="container">
    <div class="subjudul">
        <h5>Tambah Data Inventaris</h5>
    </div><br>
        <form method="POST" action="tambahproses.php">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Datang</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl_datang" placeholder="Tanggal Datang">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select name="kategori" id="kategori">
                  <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                  <option value="Bangunan">Bangunan</option>
                  <option value="Elektronik">Elektronik</option>
                  <option value="Kendaraan">Kendaraan</option>
                </select>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <input type="radio" id="Baik" name="status_barang" value="baik">
                <label for="male">Baik</label><br>
                <input type="radio" id="Perawatan" name="status_barang" value="perawatan">
                <label for="female">Perawatan</label><br>
                <input type="radio" id="Rusak" name="status_barang" value="rusak">
                <label for="other">Rusak</label>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga Satuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga" placeholder="harga Satuan">
                </div>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Kirim">
            <input type="reset" class="btn btn-danger" value="Batal">
        </form>
    </div><br><br>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>
