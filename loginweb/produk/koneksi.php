<?php
$koneksi = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "adin");
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " .mysqli_connect_error();
}