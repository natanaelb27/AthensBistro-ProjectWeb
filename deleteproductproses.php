<?php
	include('connection.php');

	$id = $_GET['product'];

	$sql="DELETE FROM produk WHERE id_produk='$id'";
	$connection->query($sql);

	header('location:maintenance.php');
?>