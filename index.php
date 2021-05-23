<?php
error_reporting(0);
include 'koneksi.php';
?>
<html>
<head>
	<title>Daftar Produk</title>
	<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #9400D3;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #9400D3;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #9400D3;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
</head>
<body>
	<center>
		<h1>Data Produk</h1>
		<a href="form_simpan.php">+Tambah Data</a><br><br>
		<form action="" method="POST" >
			<input type="text" name="query" placeholder="Cari Data"/>
			<input type="submit" name="cari" value="Search" />
		</form>
		<table border="1" width="100%">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php

		$no = 1;
		$query = $_POST['query'];

		if($query != ''){
			$select = mysqli_query ($connect, "SELECT * FROM produk WHERE id LIKE '%".$query."%' OR 
				nama_produk LIKE '%".$query."%' ");
		}else {
			$select = mysqli_query($connect, "SELECT * FROM  produk");
		}
		if(mysqli_num_rows($select)){

		while ($data = mysqli_fetch_array($select)) {
		?>
		<tr>
			<td><center><?php echo $no++ ?></center></td>
			<td><center><?php echo $data['nama_produk'] ?></center></td>
			<td><center><?php echo $data['keterangan'] ?></center></td>
			<td><center><?php echo $data['harga'] ?></center></td>
			<td><center><?php echo $data['jumlah'] ?></center></td>
            <td><center><a href="form_ubah.php?id=<?php echo $data ['id'] ?>">Ubah </a></center></td>
            <td><center><a href="proses_hapus.php?id=<?php echo $data ['id'] ?>" 
            onclick="return confirm('Apakah anda yakin ingin menghapus produk ini <?php  echo $data ['nama_produk']; ?> ? ')" > Hapus </a></center></td>
		</tr>

		<?php }}else {
			echo '<tr><td colspan="7"><center> Tidak ada nama produk</center> </td></tr>';
		 }?>
		
		</table>
	</center>
</body>
</html>
