<?php 
$koneksi = mysqli_connect("localhost","root","","adin");
// Check connection
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>