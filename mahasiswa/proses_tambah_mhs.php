<?php
include("config.php");

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nomer_mahasiswa = $_POST['nomer_mahasiswa'];
$alamat_mahasiswa = $_POST['alamat_mahasiswa'];

$sql = "INSERT INTO data_mahasiswa SET nama_mahasiswa='$nama_mahasiswa', nomer_mahasiswa='$nomer_mahasiswa', alamat_mahasiswa='$alamat_mahasiswa' ";
$query = mysqli_query($db, $sql);

//apakah query update berhasil?
if ($query) {
	
} else {
	//kalau gagal tampilkan pesan
	die("Gagal menambah data...");
}

?>