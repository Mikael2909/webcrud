<?php 
include 'koneksi.php';
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
$foto = $_FILES['foto']['name'];

// munculin nama file
$filename = $foto; //ini untuk upload file di sembarang file dimana saja bisa
$location = "images/" .$filename;
$uploadOK = 1;
$imageFileType = pathinfo($location, PATHINFO_EXTENSION); //untuk ekstensi valid apa gak nya
$valid_extensions = array("jpg","jpeg","png","gif"); // buat semua format bisa 

// cek ekstensi pada file menggunakan logika pemrograman Branching (Percabangan)
if( !in_array(strtolower($imageFileType),$valid_extensions) ){
    $uploadOK = 0;
} if($uploadOK == 0){
    echo 0;
} else {
    //upload file nya disini -> yang terpenting disini ialah
    //Jika ingin Upload File nya berfungsi wajib ada move_uploaded_file ya kalo gada itu gabisa upload 
    //meskipun logika pemrogramannya lainnya bener
    if(move_uploaded_file( $_FILES['foto']['tmp_name'],$location)){
        echo $location;
} else {
    echo 0;
}
}
$insert = mysqli_query($koneksi,"INSERT INTO tab_ktp(nik,nama,tempat,jenis,golongan,alamat,rt,kelurahan,kecamatan,agama,status,pekerjaan,kewarganegaraan,berlaku,foto)values('$nik','$nama','$tempat','$jenis','$golongan','$alamat','$rt','$kelurahan','$kecamatan','$agama','$status','$pekerjaan','$kewarganegaraan','$berlaku','$foto')");
header("location:index.php");


?>