<?php

include "koneksi.php";


$id = $_GET['id'];


$query = "SELECT * FROM produk WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql);


$query2 = "DELETE FROM produk WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); 

if($sql2){ 
	
	header("location: index.php");
}else{
	// Jika Gagal, Lakukan :
	echo "Produk gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
