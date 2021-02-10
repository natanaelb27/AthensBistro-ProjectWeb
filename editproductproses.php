<?php
    include('connection.php');

    $id=$_GET['produk'];

    $namap=$_POST['namaproduk'];
    $kategori=$_POST['kategori'];
    $deskripsi=$_POST['desc'];
    $harga=$_POST['harga'];

    $sql="SELECT * FROM produk WHERE id_produk='$id'";
    $query=$connection->query($sql);
    $row=$query->fetch_array();

    $fileinfo=PATHINFO($_FILES["foto"]["name"]);

    if (empty($fileinfo['filename'])){
        $tujuan = $row['image'];
    }
    else{
        $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
        move_uploaded_file($_FILES["foto"]["tmp_name"],"images/" . $newFilename);
        $tujuan="images/" . $newFilename;
    }

    $sql="UPDATE produk SET nama_produk='$namap', id_kategori='$kategori', deskripsi='$deskripsi', harga='$harga', image='$tujuan' WHERE id_produk='$id'";
    $connection->query($sql);

    header('location:maintenance.php');
?>