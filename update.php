<?php 
include 'koneksi.php';
$id=$_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$jenis = $_POST['jenis'];
$golongan = $_POST['golongan'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$berlaku = $_POST['berlaku'];
$foto = $_POST['foto'];

$insert=mysqli_query($koneksi,"UPDATE tab_ktp set nik='$nik', nama='$nama', tempat='$tempat', jenis='$jenis', golongan='$golongan', alamat='$alamat', rt='$rt', kelurahan='$kelurahan', kecamatan='$kecamatan', agama='$agama', status='$status', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', berlaku='$berlaku',foto='$foto' WHERE id='$id'");
header("location:index.php");


?>