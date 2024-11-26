
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Update Data</h2>
	      <a href="tampil.php">KEMBALI</a>
          <h3>Data Produk</h3>
          <form>
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

            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
              Sign up
            </button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->