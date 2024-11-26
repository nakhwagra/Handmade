<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>::after
table {
    padding: 20px;
}
tr, th, td {
    padding: 10px;
    margin: 20px;
    text-align: center;
	background: gray;
}
</style>

</head>
<body>
	<br/>
    <form method="POST" action="tampil.php">
    <button type="input" class="btn btn-outline-primary">Tampil</button>
</form>
	<br/>
	<br/>
	<h3>TAMBAH DATA PRODUK</h3>
    <div class="mb-3">
	<form method="post" action="inputuser.php">
		<table  class="table">
			<tr>
				<td style="color:white">Id Produk</td>
				<td><input class="form-control form-control-lg"  type="text" name="Id_Produk"></td>
			</tr>
			<tr>			
				<td style="color:white">Nama Produk</td>
				<td><input class="form-control form-control-lg"  type="text" name="Nama_Produk"></td>
			</tr>
			<tr>
				<td style="color:white">Harga</td>
				<td><input class="form-control form-control-lg"  type="text" name="Harga"></td>
			</tr>
			<tr>
				<td style="color:white">Stok</td>
				<td><input  class="form-control form-control-lg" type="text" name="Stok"></td>
			</tr>
			<tr>
				<td style="color:white">Deskripsi</td>
				<td><input  class="form-control form-control-lg" type="text" name="Deskripsi"></td>
			</tr>
			<tr>
				<td style="color:white">Tanggal Tambah</td>
				<td><input  class="form-control form-control-lg" type="text" name="Tgl_tambah"></td>
			</tr>
			<tr>
				<td style="color:white">Kategori</td>
				<td><input  class="form-control form-control-lg" type="text" name="Kategori"></td>
			</tr>
			<tr>
				<td style="color:white">Rating</td>
				<td><input  class="form-control form-control-lg" type="text" name="Rating"></td>
			</tr>
			<tr>
				<td colspan=3>
                <button type="submit" class="btn btn-outline-primary" style="color:black">Simpan</button> </td>
			</tr>		
		</table>
	</form>
    </div>
</body>
</html>