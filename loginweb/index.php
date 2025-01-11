<?php
session_start();

// Cek apakah user sudah login, jika sudah maka alihkan ke halaman produk
if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:produk/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - My Admin Garage</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f9;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}
		.container {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 300px;
		}
		h2 {
			text-align: center;
			color: #333;
		}
		.notification {
			color: red;
			text-align: center;
			margin-bottom: 10px;
		}
		form {
			display: flex;
			flex-direction: column;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			margin: 5px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		input[type="submit"] {
			background-color: #5cb85c;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #4cae4c;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login Admin Garage</h2>
		<div class="notification">
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "Login gagal! username dan password salah!";
				}else if($_GET['pesan'] == "logout"){
					echo "Anda telah berhasil logout";
				}else if($_GET['pesan'] == "belum_login"){
					echo "Anda harus login untuk mengakses halaman admin";
				}
			}
			?>
		</div>
		<form method="post" action="cek_login.php">
			<input type="text" name="username" placeholder="Masukkan username" required>
			<input type="password" name="password" placeholder="Masukkan password" required>
			<input type="submit" value="LOGIN">
		</form>
	</div>
</body>
</html>