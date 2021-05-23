<?php
$connect=mysqli_connect("localhost","root","","fazztrack");

if(!$connect){
    echo "Koneksi Gagal";
    die();
}
?>