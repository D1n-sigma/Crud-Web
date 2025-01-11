<!DOCTYPE html>
<html>
<head>
	<title>My Admin Garage</title>
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
		<h2 class="text-center">Halaman Pengaturan Produk Web</h2>
		<a class="btn btn-custom mb-3" href="index.php">KEMBALI</a>
		<h3 class="mb-4">TAMBAH DATA PRODUK</h3>
		<form method="post" action="tambah_aksi.php" class="form">
			<div class="form-group">
				<label>No.</label>
				<input type="number" class="form-control" name="no" required>
			</div>
			<div class="form-group">
				<label>Nama Produk</label>
				<input type="text" class="form-control" name="nama_produk" required>
			</div>
			<div class="form-group">
				<label>Harga Produk (Rp)</label>
				<input type="text" class="form-control" name="harga_produk" required>
			</div>
			<div class="form-group">
				<input class="btn btn-custom" type="submit" value="SIMPAN">
			</div>
		</form>
	</div>
	<!-- Include Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>