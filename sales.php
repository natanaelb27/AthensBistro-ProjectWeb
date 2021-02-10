<?php session_start(); include('header.php'); ?>
<?php
if($_SESSION['role'] == "karyawan"){
	?>
	<body>
	<header class="menutiap">
		<div class="main">
			<?php include('navbaremployee.php'); ?>
		</div>
		<div class="buttontiap">
  			<a href="maintenance.php" class="btn">Maintenance</a>
  			<a href="sales.php" class="btn active">Sales</a>
  		</div>
	</header>
	<div class="container">
		<h1 class="page-header text-center">Sales</h1>
		<table class="table table-striped table-bordered">
			<thead class="text-center">
				<th>Tanggal</th>
				<th>Nama Pembeli</th>
				<th>Tujuan Order</th>
				<th>No Telp</th>
				<th>Total Penjualan</th>
				<th>Details</th>
			</thead>
			<tbody class="text-center">
				<?php 
					$sql="SELECT * FROM pembelian ORDER BY id_pembelian DESC";
					$query=$connection->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo date('M d, Y h:i A', strtotime($row['tanggal_pembelian'])) ?></td>
							<td><?php echo $row['nama_pelanggan']; ?></td>
							<td><?php echo $row['tujuan_order']; ?></td>
							<td><?php echo $row['telpon']; ?></td>
							<td><?php echo "Rp. "; echo number_format($row['total_harga']); ?></td>
							<td><a href="#detailsales<?php echo $row['id_pembelian']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="fa fa-search"></span> View</a>
								<?php include('detailsales.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	

	
</body>
</html>
	<?php
} else {
	?>
	<script>
		window.alert('Silahkan login terlebih dahulu!');
		window.location.href='login.php';
	</script>
	<?php
		
}
?>
