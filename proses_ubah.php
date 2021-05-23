<?php
// Load file koneksi.php
include "koneksi.php";

$id = $_GET['id'];
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];


		$query = "UPDATE produk SET nama_produk='".$nama_produk."', keterangan='".$keterangan."', harga='".$harga."', jumlah='".$jumlah."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); 

		if($sql){ 

			header("location: index.php");
		}else{

			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
?>
