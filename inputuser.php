<?php 
include 'koneksi.php';

// Cek dan ambil data dari $_GET
$nama_produk = isset($_POST['Nama_Produk']) ? $_POST['Nama_Produk'] : null;
$harga = isset($_POST['Harga']) ? $_POST['Harga'] : null;
$stok = isset($_POST['Stok']) ? $_POST['Stok'] : null;
$deskripsi = isset($_POST['Deskripsi']) ? $_POST['Deskripsi'] : null;
$tgl_tambah = isset($_POST['Tgl_tambah']) ? $_POST['Tgl_tambah'] : null;
$kategori = isset($_POST['Kategori']) ? $_POST['Kategori'] : null;
$rating = isset($_POST['Rating']) ? $_POST['Rating'] : null;

// Periksa apakah semua variabel diperlukan sudah ada
if ($nama_produk && $harga && $stok && $deskripsi && $tgl_tambah && $kategori && $rating) {
    // Insert ke database
    $query = "INSERT INTO produk_handmade (Nama_Produk, Harga, Stok, Deskripsi, Tgl_tambah, Kategori, Rating) VALUES ('$nama_produk', '$harga', '$stok', '$deskripsi', '$tgl_tambah', '$kategori', '$rating')";
    
    if (mysqli_query($koneksi, $query)) {
        header("location: tampil.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Parameter tidak lengkap.";
}
?>
