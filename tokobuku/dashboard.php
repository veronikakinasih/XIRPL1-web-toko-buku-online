<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <title>Buku Ku</title>
        <link rel="stylesheet" type="text/css" href="css/styled.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body">
	<!-- header -->
	<header>
		<div class="container-1">
			<h1><a href="dashboard.php">Buku Ku/a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="Keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section-1">
		<div class="container-1">
			<h3>Dashboard</h3>
			<div class="box-1">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko Online</h4>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container-1">
			<small>Copyright &copy; 2021 - Buku Ku.</small>
		</div>
	</footer>
</body>
</html>