<?php include('header.php'); ?>
<body>
	<header class="order">
		<div class="main">
			<?php include('navigationbar.php'); ?>
		</div>
	</header>
	<div class="page-wrapper">
		<div class="container">
		<h1 class="text-center" style="margin-top: 20px; font-family: courier;">Order Foods & Drinks</h1>
		<form method="POST" action="pembelian.php">
			<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center">Pilih</th>
				<th class="text-center">Kategori</th>
				<th class="text-center">Nama Produk</th>
				<th class="text-center">Harga</th>
				<th class="text-center">Quantity</th>
			</thead>
			<tbody>	
				<?php 
					$sql="SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori ORDER BY produk.id_kategori ASC, produk.nama_produk ASC";
					$query=$connection->query($sql);
					$i=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['id_produk']; ?>seperator<?php echo $i; ?>" name="id_produk[]" style=""></td>
							<td class="text-center"><?php echo $row['nama_kategori']; ?></td>
							<td class="text-center"><?php echo $row['nama_produk']; ?></td>
							<td class="text-center"> <?php echo "Rp. "; echo number_format($row['harga']); ?></td>
							<td class="text-center"><input type="text" class="form-control" name="quantity<?php echo $i; ?>"></td>
						</tr>
						<?php
						$i++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-md-3">
				<input type="text" name="pelanggan" class="form-control" placeholder="Nama Pelanggan" required>
				<input type="text" name="tujuan_order" class="form-control" placeholder="Tujuan Order" required style="margin-top: 10px; margin-bottom: 10px;">
				<input type="text" name="telpon" class="form-control" placeholder="No Telpon Pelanggan" required style="margin-top: 10px; margin-bottom: 10px;">
				<button type="submit" class="btn btn-primary">Pesan</button>
			</div>
		
		</div>
		</form>
	</div>
	</div>



	<?php include('footer.php'); ?>

</body>

</html>