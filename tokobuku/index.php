<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html>
<head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Buku Ku</title>
        <link rel="stylesheet" type="text/css" href="css/stylei.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body">
	<!-- header -->
	<header>
		<div class="container-1">
			<h1><a href="index.php">Buku Ku</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container-1">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<div id="slider">
    <ul id="slideWrap"> 
      <li><img id="myImg" src="img1/slide1.png" alt="Snow"></li>
      <li><img id="myImg1" src="img1/slide2.png" alt="Vector"></li>
      <li><img id="myImg2" src="img1/slide3.png" alt="Vector2"></li>
      <li><img id="myImg3" src="img1/slide4.png" alt="Vector3"></li>
    </ul>
    <a id="prev" href="#">&lt;</a>
    <a id="next" href="#">&gt;</a>
  </div>

  <div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

	<!-- category -->
	<div class="section-1">
		<div class="container-1">
			<h3>Kategori</h3>
			<div class="box-1">
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0) {
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							<img src="img/list (2).svg" width="50px" style="margin-bottom: 5px">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori Tidak Ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- new product -->
	<div class="section-1">
		<div class="container-1">
			<h3>Produk Terbaru</h3>
			<div class="box-1">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>
					<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4">
							<img src="produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format ($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk Tidak Ada</p>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container-1">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2021 - Buku Ku.</small>
		</div>
	</div>
	<script type="text/javascript" src="js/slide.js"></script>
</body>
</html>