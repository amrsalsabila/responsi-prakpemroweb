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

     <link rel="stylesheet" type="text/css" href="home.css">

    <title>Inventaris</title>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inventaris.php">Daftar Inventaris</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           List per Kategori
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="inventaris.php?list=bangunan">Bangunan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?list=kendaraan">Kendaraan</a></li>
            <li><a class="dropdown-item" href="inventaris.php?list=alattuliskantor">Alat Tulis Kantor</a></li>
            <li> <a class="dropdown-item" href="inventaris.php?list=elektronik">Elektronik</a></li>
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
  <body><br>
     <div class="container">
        <a href="tambah.php" type="button" class="btn btn-primary">Tambah</a> <br><br>
        <div class="tabel rounded">
            <table class="table table-hover rounded">
                <tr class="bg-primary text-white">
                      <td> No </td>
            <td> Kode </td>
            <td> Nama Barang </td>
            <td> Jumlah </td>
            <td> Satuan </td>
            <td> Tanggal Datang </td>
            <td> Kategori </td>
            <td> Status </td>
            <td> Harga Satuan </td>
            <td> Total Harga </td>
            <td> Aksi </td>
        </tr>
    <?php
    $totalinventaris=0;
        include 'koneksi.php';
        $i=0;
        $jumlah=0;
        if(empty($_GET['list']))
        {
            $query=mysqli_query($konek,"select * from inventaris");
        }
        else if($_GET['list']=='bangunan')
        {
            $query=mysqli_query($konek,"select * from inventaris where kategori='Bangunan'");
        }
        else if($_GET['list']=='kendaraan')
        {
            $query=mysqli_query($konek,"select * from inventaris where kategori='Kendaraan'");
        }
        else if($_GET['list']=='alattuliskantor')
        {
            $query=mysqli_query($konek,"select * from inventaris where kategori='alattuliskantor'");
        }
        else if($_GET['list']=='elektronik')
        {
            $query=mysqli_query($konek,"select * from inventaris where kategori='Elektronik'");
        }
        while($data=mysqli_fetch_array($query))
        { ?>
        <tr>
            <td> <?php $i++; echo $i; ?> </td>
            <td> <?php echo $data['kode_barang']; ?></td>
            <td> <?php echo $data['nama_barang']; ?> </td>
            <td> <?php echo $data['jumlah']; ?></td>
            <td> <?php echo $data['satuan']; ?></td>
            <td> <?php echo $data['tgl_datang']; ?></td>
            <td> <?php echo $data['kategori']; ?></td>
            <td> <?php echo $data['status_barang']; ?></td>
            <td> <?php echo $data['harga']; ?></td>
            <td> Rp. <?php $totalharga = $data['harga'] * $data['jumlah'];
                 echo $totalharga; 
                         ?>
            <td>
                 <?php $totalinventaris = $totalinventaris+$totalharga ?>
                <a href=ubah.php?kode_barang=<?php echo $data['kode_barang'];?>>Edit</a> |
                <a href=hapus.php?kode_barang=<?php echo $data['kode_barang'];?>>Hapus</a>
            </td>
        <?php }?>
                </tr>
            </table> <br>

            Total Inventaris = Rp <?= $totalinventaris ?>,00
        </div>
    </div>
    <div class="modal fade" id="modalfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data?
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="close btn btn-dark" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <a href=hapus.php?kode_barang=<?php echo $data['kode_barang'];?> type="button" class="btn btn-dark">Hapus</a>
            </div>
        </div>
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