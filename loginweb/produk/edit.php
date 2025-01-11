<!DOCTYPE html>
<html>
<head>
	<title>My CRUD</title>
	<!-- Include Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #333;
			color: #fff;
		}
		.container {
			margin-top: 50px;
		}
		.btn-custom {
			background-color: #555;
			color: #fff;
		}
		.btn-custom:hover {
			background-color: #777;
		}
		.form-control {
			background-color: #444;
			color: #fff;
			border: 1px solid #555;
		}
		.form-control:focus {
			background-color: #555;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 class="text-center">Adin Garage Admin</h2>
		<a class="btn btn-custom mb-3" href="index.php">KEMBALI</a>
		<h3 class="mb-4">EDIT DATA PRODUK</h3>

		<?php
		// Hubungkan ke database
		include 'koneksi.php';

		// Periksa apakah parameter `id` tersedia di URL
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			// Query untuk mengambil data berdasarkan ID
			$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");

			// Cek apakah data ditemukan
			if (mysqli_num_rows($data) > 0) {
				while ($d = mysqli_fetch_array($data)) {
					?>
					<form method="post" action="update.php" class="form">
						<div class="form-group">
							<label>No.</label>
							<input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
							<input type="number" class="form-control" name="no" value="<?php echo $d['no']; ?>" required>
						</div>
						<div class="form-group">
							<label>Nama Produk</label>
							<input type="text" class="form-control" name="nama_produk" value="<?php echo $d['nama_produk']; ?>" required>
						</div>
						<div class="form-group">
							<label>Harga Produk (Rp)</label>
							<input type="text" class="form-control" name="harga_produk" value="<?php echo $d['harga_produk']; ?>" required>
						</div>
						<div class="form-group">
							<input class="btn btn-custom" type="submit" value="SIMPAN">
						</div>
					</form>
					<?php 
				}
			} else {
				echo "<p>Data dengan ID $id tidak ditemukan.</p>";
			}
		} else {
			echo "<p>ID tidak ditemukan di URL.</p>";
		}
		?>
	</div>
	<!-- Include Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
