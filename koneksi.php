<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "sql";

	$konek = new mysqli($hostname,$username,$password,$database);
	if($konek-> connect_error){
		die("Koneksi Gagal : ". $connect-> connect_error);
	}
?>