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

    <title>Inventaris</title>
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
            <li><a class="dropdown-item" href="inventaris.php?list=bangunan">Bangunan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?list=kendaraan">Kendaraan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?list=alattuliskantor">Alat Tulis Kantor</a></li>
            <li><a class="dropdown-item" href="inventaris.php?list=elektronik">Elektronik</a></li>
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
            

         <div class="text-center"><br><br><br><br><br><br><br><h1>SELAMAT DATANG</h1><br>
        <h1>
            <?php
              include 'koneksi.php';
              $username=$_SESSION['username'];
              $query=mysqli_query($konek, "SELECT * FROM petugas WHERE username='$username'");
              while($data=mysqli_fetch_array($query))
              {echo $data['nama_lengkap'];}
            ?>
            </h1>
        </div>
    </div>
        <div class="footer fixed-bottom">
        </div>
    </div>
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
