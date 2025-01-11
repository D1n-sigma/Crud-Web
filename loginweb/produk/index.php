<!DOCTYPE html>
<html>
<head>
	<title>My Admin Garage</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #333;
			color: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}
		.container {
			background-color: #444;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
			width: 80%;
			max-width: 800px;
		}
		h2 {
			text-align: center;
			color: #fff;
		}
		.logout {
			display: block;
			text-align: center;
			margin-top: 20px;
		}
		.alert {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Dashboard Crud</h2>
		<?php 
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "berhasil_ditambahkan") {
				echo "<div class='alert alert-success'>Data berhasil ditambahkan!</div>";
			} else if ($_GET['pesan'] == "berhasil_diedit") {
				echo "<div class='alert alert-success'>Data berhasil diedit!</div>";
			} else if ($_GET['pesan'] == "berhasil_dihapus") {
				echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
			}
		}
		?>
		<a href="tambah.php" class="btn btn-success mb-3"><i class="fas fa-plus"></i> TAMBAH PRODUK</a>
		<table class="table table-dark table-striped">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Produk</th>
					<th>Harga Produk</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from produk");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama_produk']; ?></td>
					<td>Rp <?php echo number_format($d['harga_produk'], 0, ',', '.'); ?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> EDIT</a>
						<a href="hapus.php?id=<?php echo $d['id_produk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');"><i class="fas fa-trash"></i> DELETE</a>
					</td>
				</tr>
				<?php 
			}
			?>
			</tbody>
		</table>
		<a class="logout btn btn-secondary" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>