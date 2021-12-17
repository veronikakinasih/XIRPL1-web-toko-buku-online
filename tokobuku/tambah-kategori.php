<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buku Ku</title>
        <link rel="stylesheet" type="text/css" href="css/styled.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- header -->
        <header>
            <div class="container-1">
                <h1><a href="dashboard.php">Buku Ku</a></h1>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data Kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="keluar.php">Keluar</a></li>

                </ul>
            </div>

        </header>

        <!-- content -->
        <div class="section-1">
            <div class="container-1">
                <h3>Tambah Data Kategori</h3>
                <div class="box-1">
                    <form action="" method="POST">
                        <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
                        <input type="submit" name="submit" value="Submit" class="btn-1">
                    </form>
                    <?php 
                        if(isset($_POST['submit'])){

                            $nama = ucwords($_POST['nama']);

                            $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
                                                null,
                                                '".$nama."') ");
                            if($insert){
                                echo '<script>alert("Tambah Data Berhasil")</script>';
                                echo '<script>window.location="data-kategori.php"</script>';
                            }else{
                                echo 'gagal '.mysqli_error($conn);
                            }
                        }
                     ?>
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