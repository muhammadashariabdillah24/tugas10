<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
	

	$query ="INSERT INTO produk (id,nama_produk,keterangan,harga,jumlah)
	VALUE ('$id','$nama_produk','$keterangan','$harga','$jumlah')";
	$sql = mysqli_query($connect, $query);

	if($sql){
		
		header("location: index.php");
	}else{
		
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data produk ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
?>
