<html>
<head>
	<title>Ubah Data Produk</title>
	<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #9400D3;
      }
    button {
          background-color: #9400D3;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
</head>
<body>
<section class="base">
	<h1>Ubah Data Produk</h1>
	
	<?php

	include "koneksi.php";
	

	$id = $_GET['id'];
	

	$query = "SELECT * FROM produk WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td><input type="number" name="jurusan" value="<?php echo $data['jumlah']; ?>"></td>
	</tr>

	</table>
	
	<hr>
	<div>
	<button type="submit" value="Ubah">Simpan Data</button>
	<a href="index.php"><button type="button" value="Batal">Batal</button></a>
	</div>
	
	<section>
	</form>
</body>
</html>
