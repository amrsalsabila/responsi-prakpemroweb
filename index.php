<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<br><br>
    <div class="container">
        <div class="jumbotron text-center bg-transparent" style="height: 9rem;">
            <h1 style="margin-top: -13px;">Login</h1>
        </div>
        <?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo"<center>login gagal <br> username/password salah</center>";
			}
			else if($_GET['pesan']=="logout"){
				echo "<center>Logout berhasil</center>";
			}
			else if($_GET['pesan']=="belum_login"){
				echo "<center>ANDA BELUM LOGIN</center>";
			}
		}	
	?>
        <form action="ceklogin.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>