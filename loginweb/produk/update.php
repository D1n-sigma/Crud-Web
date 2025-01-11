<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id_produk = $_POST['id_produk'];
$no = $_POST['no'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];

// Validasi input
if (isset($id_produk) && isset($no) && isset($nama_produk) && isset($harga_produk)) {
    // update data ke database
    $query = "UPDATE produk SET no='$no', nama_produk='$nama_produk', harga_produk='$harga_produk' WHERE id_produk='$id_produk'";
    
    if (mysqli_query($koneksi, $query)) {
        // jika berhasil, kembali ke index.php dengan notifikasi
        header("location:index.php?pesan=berhasil_diedit");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Semua data harus diisi.";
}
?>
