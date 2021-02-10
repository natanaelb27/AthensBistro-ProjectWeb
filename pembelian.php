<?php 
include('connection.php');
date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['id_produk'])){
	$nama=$_POST['pelanggan'];
	$tujuan=$_POST['tujuan_order'];
	$notelp=$_POST['telpon'];
	$currdate=date('Y-m-d H:i:s');
    $sql="INSERT INTO pembelian (nama_pelanggan, tujuan_order, telpon, total_harga, tanggal_pembelian) VALUES ('$nama', '$tujuan', '$notelp', 0, '$currdate')";
	$connection->query($sql);
	$idpembelian=$connection->insert_id;
 	$total_harga=0;
 	foreach($_POST['id_produk'] as $produk):
		$proinfo=explode("seperator",$produk);
		$checked_produk=$proinfo[0];
		$q=$proinfo[1];
		$sql="SELECT * FROM produk WHERE id_produk='$checked_produk'";
		$query=$connection->query($sql);
		$row=$query->fetch_array();
 		if (isset($_POST['quantity'.$q])){
			$sum=$row['harga']*$_POST['quantity'.$q];
			$total_harga+=$sum;
			$sql="INSERT INTO detail_pembelian (id_pembelian, id_produk, quantity) VALUES ('$idpembelian', '$checked_produk', '".$_POST['quantity'.$q]."')";
			$connection->query($sql);
		}
		endforeach;
 	
	$sql="UPDATE pembelian SET total_harga='$total_harga' WHERE id_pembelian='$idpembelian'";
 	$connection->query($sql);
 	?>
		<script>
			window.alert('Terima Kasih sudah memesan makanan di Athens Bistro, silahkan menunggu pesananan Anda!');
			window.location.href='order.php';
		</script>
		<?php
	}
	else{
		?>
		<script>
			window.alert('Pilihlah Produk');
			window.location.href='order.php';
		</script>
		<?php
	}
?>
