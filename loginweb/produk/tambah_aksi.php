<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$no','$nama_produk','$harga_produk')");
 
// mengalihkan halaman kembali ke index.php dengan notifikasi
header("location:index.php?pesan=berhasil_ditambahkan");
 
?>