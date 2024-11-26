<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>::after
table {
    padding: 20px;
}
tr, th, td {
    padding: 10px;
    margin: 20px;
}
</style>
</head>
<body>
 <br>
    <form method="POST" action="tambah.php">
    <hr>
    <button type="input" class="btn btn-outline-primary">Tambah</button>
    <hr>
    </form>
	<table class="table table-striped">
		<tr>
			<th>Id Produk</th>
            <th>Nama Produk</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Deskripsi</th>
			<th>Tanggal Tambah</th>
			<th>Kategori</th>
			<th>Rating</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk_handmade");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $d['Id_Produk']; ?></td>
				<td><?php echo $d['Nama_Produk']; ?></td>
				<td><?php echo $d['Harga']; ?></td>
				<td><?php echo $d['Stok']; ?></td>
				<td><?php echo $d['Deskripsi']; ?></td>
				<td><?php echo $d['Tgl_tambah']; ?></td>
				<td><?php echo $d['Kategori']; ?></td>
				<td><?php echo $d['Rating']; ?></td>

                
				<td>
					<a role ="button" class="btn btn-info" href="ubah.php?id=<?php echo $d['Id_Produk']; ?>">UBAH</a> </button>
					<a role ="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['Id_Produk']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>