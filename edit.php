<?php 
session_start();
if(!isset($_SESSION["masuk"])){
	header("Location:masuk.php");
	exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form Edit Data</title>
</head>

<body>
    <h1 class="text-center mt-5">FORM EDIT DATA</h1>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM tab_ktp WHERE id='$id'");
    while($d = mysqli_fetch_array($data))
    {
		?>  
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="tempat">Tempat/Tanggal lahir (Format:Medan/30 september 2005)</label>
                <input type="text" class="form-control" name="tempat" value="<?php echo $d['tempat']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Kelamin</label>
                <select class="custom-select" name="jenis" value="<?php echo $d['jenis']; ?>">

                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="golongan">Golongan Darah</label>
                <select class="custom-select" name="golongan" value="<?php echo $d['golongan']; ?>">
                    <option>A</option>
                    <option>O</option>
                    <option>B</option>
                    <option>AB</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for="rt">RT/RW (Contoh Format:000/000)</label>
                <input type="text" class="form-control" name="rt" value="<?php echo $d['rt']; ?>">
            </div>
            <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <input type="text" class="form-control" name="kelurahan" value="<?php echo $d['kelurahan']; ?>">
            </div>
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" value="<?php echo $d['kelurahan']; ?>">
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select class="custom-select" name="agama" value="<?php echo $d['agama']; ?>">

                    <option>Protestan</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Katolik</option>
                    <option>Islam</option>
                    <option>Konghucu</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="custom-select" name="status" value="<?php echo $d['status']; ?>">
                    <option>Lajang</option>
                    <option>Telah Menikah</option>
                    <option>Cerai Hidup</option>
                    <option>Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>">
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select class="custom-select" name="kewarganegaraan" value="<?php echo $d['kewarganegaraan']; ?>">
                    <option>WNI</option>
                    <option>WNA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berlaku">Berlaku Sampai</label>
                <input type="date" class="form-control" name="berlaku" value="<?php echo $d['berlaku']; ?>">
            </div>
            <div class="form-group">
                <label> Foto </label>
                <input type="file" class="form-control" name="foto" value="<?php echo $d['foto']; ?>">
            </div>
            <button class="btn btn-success" type="submit">Simpan</button>
            <button class="btn btn-danger" type="reset">Batal</button>
        </div>
    </form>
    <?php
            }   
            ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>