<?php
include('connection.php');

$namap=$_POST['namaproduk'];
$kategori=$_POST['kategori'];
$harga=$_POST['harga'];
$deskripsi=$_POST['desc'];

$fileinfo=PATHINFO($_FILES["foto"]["name"]);

if(empty($fileinfo['filename'])){
	$tujuan="";
}else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["foto"]["tmp_name"],"images/" . $newFilename);
	$tujuan="images/" . $newFilename;
	}
	
$sql="INSERT INTO produk (nama_produk, id_kategori, deskripsi, harga, image) VALUES ('$namap', '$kategori', '$deskripsi', '$harga', '$tujuan')";
$connection->query($sql);

header('location:maintenance.php');

?>