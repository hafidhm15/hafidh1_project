<?php
include"koneksi.php";



$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$domisili = $_POST['domisili'];
$jurusan = $_POST['jurusan'];

$query = "insert INTO mahasiswa SET
								nama = '$nama',
								jenis_kelamin = '$jenis_kelamin',
								domisili = '$domisili',
								jurusan = '$jurusan'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

