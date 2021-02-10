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
  			<a href="sales.php" class="btn">Sales</a>
  		</div>
	</header>
	
		
	</div>
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