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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Cetak Data</title>
  </head>
  <body>
    <h1 class="text-center">DATA PENDUDUK WARGA XYZ</h1>
    <br>
    <br>
    <table class="table table-bordered" id="tabel">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIK</th>
						<th>NAMA</th>
						<th>Tempat/Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Golongan Darah</th>
						<th>Alamat</th>
						<th>RT/RW</th>
						<th>KELURAHAN</th>
						<th>KECAMATAN</th>
						<th>AGAMA</th>
						<th>STATUS</th>
						<th>PEKERJAAN</th>
						<th>KEWARGANEGARAAN</th>
						<th>BERLAKU SAMPAI</th>
						<th>FOTO</th>
					</tr>
				</thead>
				<?php
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi, "SELECT * FROM tab_ktp");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tbody>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['nik']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['tempat']; ?></td>
							<td><?php echo $d['jenis']; ?></td>
							<td><?php echo $d['golongan']; ?></td>
							<td><?php echo $d['alamat']; ?></td>
							<td><?php echo $d['rt']; ?></td>
							<td><?php echo $d['kelurahan']; ?></td>
							<td><?php echo $d['kecamatan']; ?></td>
							<td><?php echo $d['agama']; ?></td>
							<td><?php echo $d['status']; ?></td>
							<td><?php echo $d['pekerjaan']; ?></td>
							<td><?php echo $d['kewarganegaraan']; ?></td>
							<td><?php echo $d['berlaku']; ?></td>
							<td><img src="images/<?php echo $d['foto']; ?>" alt="Foto" width="80" height="100"></td>
							
						</tr>

					</tbody>
				<?php
				}
				?>
			</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        window.print();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>