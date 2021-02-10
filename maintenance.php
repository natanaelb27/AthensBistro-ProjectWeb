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
  			<a href="maintenance.php" class="btn active">Maintenance</a>
  			<a href="sales.php" class="btn">Sales</a>
  		</div>
	</header>
	<div class="container">
	<h1 class="page-header text-center">Maintenance</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="kategorilist" class="btn btn-default" style="color: black; border-color: black;">
			<option value="0">All Category</option>
			<?php
				$sql="SELECT * FROM kategori";
				$cquery=$connection->query($sql);
				while($krow=$cquery->fetch_array()){
					$idkategori = isset($_GET['kategori']) ? $_GET['kategori'] : 0;
					$selected = ($idkategori == $krow['id_kategori']) ? " selected" : "";
					echo "<option$selected value=".$krow['id_kategori'].">".$krow['nama_kategori']."</option>";
				}
			?>
			</select>
			<a href="#addproduct" data-toggle="modal" class="pull-right btn btn-primary"><span class="fa fa-plus"></span> Product</a>
			<?php include('addproduct.php'); ?>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead class="text-center">
				<th>Foto</th>
				<th>Nama Produk</th>
				<th>Deskripsi</th>
				<th>Harga</th>
				<th>Tindakan</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['kategori']))
					{
						$idkategori=$_GET['kategori'];	
						$where = " WHERE produk.id_kategori = $idkategori";
					}
					$sql="SELECT * FROM produk JOIN kategori on kategori.id_kategori=produk.id_kategori $where ORDER BY produk.id_kategori ASC, produk.nama_produk ASC";
					$query=$connection->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr class="text-center">
							<td><a href="<?php if(empty($row['image'])){echo "images/noimage.jpg";} else{echo $row['image'];} ?>"><img src="<?php if(empty($row['image'])){echo "images/noimage.jpg";} else{echo $row['image'];} ?>" height="30px" width="40px"></a></td>
							<td><?php echo $row['nama_produk']; ?></td>
							<td style="width: 500px;"><?php echo $row['deskripsi']; ?></td>
							<td style="width: 150px;"><?php echo "Rp. "; echo number_format($row['harga']); ?></td>
							<td style="width: 400px;">
								<a href="#editproduct<?php echo $row['id_produk']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="fa fa-pencil"></span> Edit</a> ||
								<?php include('editproduct.php');?>
								<a href="#deleteproduct<?php echo $row['id_produk']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
								<?php include('deleteproduct.php');?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>	

<script type="text/javascript">
	$(document).ready(function(){
		$("#kategorilist").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'maintenance.php';
			}
			else
			{
				window.location = 'maintenance.php?kategori='+$(this).val();
			}
		});
	});
</script>


	
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