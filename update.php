<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$Id_Produk    = $_POST['Id_Produk'];
$Nama_Produk      = $_POST['Nama_Produk'];
$Harga = $_POST['Harga'];
$Stok   = $_POST['Stok'];
$Deskripsi      = $_POST['Deskripsi'];
$Tgl_tambah      = $_POST['Tgl_tambah'];
$Kategori      = $_POST['Kategori'];
$Rating      = $_POST['Rating'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE produk_handmade SET Nama_Produk = '$Nama_Produk', Harga = '$Harga', Stok = '$Stok', Deskripsi = '$Deskripsi', Tgl_tambah = '$Tgl_tambah', Kategori = '$Kategori', Rating = '$Rating' WHERE Id_Produk = '$Id_Produk'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>