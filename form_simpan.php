<html>
<head>
	<title>Tambah Data Produk</title>
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
<center>
        <h1>Tambah Data Produk</h1>
      <center>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">

	<section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Keterangan</label>
          <input type="text" name="keterangan" autofocus="" required="" />
        </div>
        <div>
          <label>Harga</label>
          <input type="text" name="harga" autofocus="" required="" />
        </div>
        <div>
          <label>Jumlah</label>
          <input type="text" name="jumlah" autofocus="" required="" />
        </div>
       
        
  <div>
	<button type="submit" value="Simpan">Simpan Data</button>
	<a href="index.php"><button type="button" value="Batal">Batal</button></a>
	</div>
        </section>
	</form>
</body>
</html>
