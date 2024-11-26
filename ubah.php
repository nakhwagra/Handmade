<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
 
	<h2>Update Data</h2>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	
	<h3>Data Produk</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from produk_handmade where Id_Produk='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NamaProduk</td>
					<td>
						<input type="hidden" name="Id_Produk" value="<?php echo $d['Id_Produk']; ?>">
						<input type="text" name="Nama_Produk" value="<?php echo $d['Nama_Produk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="Harga" value="<?php echo $d['Harga']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="password" name="Stok" value="<?php echo $d['Stok']; ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="Deskripsi" value="<?php echo $d['Deskripsi']; ?>"></td>
				</tr>
				<tr>
					<td>TanggalTambah</td>
					<td><input type="text" name="Tgl_tambah" value="<?php echo $d['Tgl_tambah']; ?>"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="Kategori" value="<?php echo $d['Kategori']; ?>"></td>
				</tr>
				<tr>
					<td>Rating</td>
					<td><input type="text" name="Rating" value="<?php echo $d['Rating']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>