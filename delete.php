<?php 
include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM tab_ktp where id='$id'");
header("location:index.php");
?>