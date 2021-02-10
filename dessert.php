<?php include('header.php'); ?>
<body>
	<header class="menutiap">
		<div class="main">
			<?php include('navigationbar.php'); ?>
		</div>
		<div class="buttontiap">
  			<a href="appetizer.php" class="btn">Appetizer</a>
  			<a href="maincourse.php" class="btn">Main Course</a>
  			<a href="dessert.php" class="btn active">Dessert</a>
  			<a href="beverages.php" class="btn">Beverages</a>
  		</div>
	</header>
	<div class="page-wrapper">
		<div class="container">
			<div class="containercard">
				<?php
				$sql="SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE kategori.nama_kategori='Dessert'";
				$fquery=$connection->query($sql);
				$i=1;
				while($frow=$fquery->fetch_array()){
					if($i == 1) echo "<div class='row'>"; 
					?>
					<div class="col-4">
						<div class="cards dessertcard">
							<div class="imgBx">
								<img src="<?php if(empty($frow['image'])){echo "images/noimage.jpg";} else{echo $frow['image'];} ?>" height="240px" width="100%">
							</div>
							<div class="contentBx">
					 			<h2><?php echo $frow['nama_produk']; ?></h2>
					 			<div class="desc">
					 				<h3><?php echo $frow['deskripsi'];?></h3>
					 			</div>
					 			<div class="price">
					 				<h3><?php echo "Rp. "; echo number_format($frow['harga']); ?></h3>
					 			</div>
						 		
							</div>
						</div>
						<?php 
						$i++;
						echo "</div>";
						if($i == 4){
							echo "</div>";
						$i = 1;
				} 
			}
			
				?>
			</div>
			
		</div>	
	</div>
	<?php include('footer.php'); ?>
</body>
</html>

