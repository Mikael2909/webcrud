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
	<title>Sidebar 05</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<style>
		 .crud:hover {
			box-shadow: 2px 2px 2px 2px white;
		}
	</style>
</head>

<body>

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>
			<div class="p-4 pt-5">

				<img src="images\rsz_mikael.jpg" alt="..." class="rounded-circle rounded-sm">
				<ul class="list-unstyled components mb-5">

					<li class="active">
						<a href="#"><span class="fa fa-home mr-3"></span> Home</a>
					</li>


				</ul>

				<div class="mb-5">
					<h3 class="h6 mb-3">CREATED BY MIKAEL SARAGI</h3>


					<div class="footer">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> By Mikael Saragi <i class="icon-heart" aria-hidden="true"></i>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>

				</div>
		</nav>

		<!-- Page Content  -->

		<div id="content" class="p-4 p-md-5 pt-5">
			<a href="keluar.php" onclick = "return confirm('Apakah Anda Ingin Keluar?');">	<button class="btn btn-success float-right mb-5">KELUAR</button></a>
			<h2 class="mt-5 text-center mb-5">DATA PENDUDUK WARGA XYZ</h2>
			<!-- Button trigger modal -->

			<button class="btn btn-primary " data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus-square "></i><span class="ml-2">TAMBAH DATA</span></button>
		<a href="cetak.php" target="_blank"><button type="button" class="btn btn-outline-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"></path>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
</svg>
              </button></a>
                
              </button>
			<!-- Modal -->
			<div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog 	">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">FORM TAMBAH DATA</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="nik">Nik</label>
										<input type="text" class="form-control" id="nik" placeholder="masukkan nik anda" name="nik" required>
										<div class="valid-feedback">
											Nik Telah Dimasukkan
										</div>
										<div class="invalid-feedback">
											Nik Belum Dimasukkan
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="nama">Nama</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama anda" required>
										<div class="valid-feedback">
											Nama Telah dimasukkan
										</div>
										<div class="invalid-feedback">
											Nama Belum Dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-7 mb-3">
										<label for="tempat">Tempat/Tanggal lahir (Format:Medan/30 september 2005)</label>
										<input type="text" class="form-control" id="tempat" name="tempat" required>
										<div class="invalid-feedback">
											Tempat/tanggal lahir belum dimasukkan
										</div>
									</div>
									<div class="col-md-2 mb-3">
										<label for="jenis">Jenis Kelamin</label>
										<select class="custom-select" id="jenis" name="jenis" required>

											<option selected disabled value="">Pilih Jenis Kelamin anda</option>
											<option>Laki-Laki</option>
											<option>Perempuan</option>
										</select>
										<div class="invalid-feedback">
											Jenis Kelamin belum dimasukkan
										</div>
									</div>
									<div class="col-md-2 mb-3">
										<label for="golongan">Golongan Darah</label>
										<select class="custom-select" id="golongan" name="golongan" required>
											<option selected disabled value="">Masukkan Golongan Darah anda</option>
											<option>A</option>
											<option>O</option>
											<option>B</option>
											<option>AB</option>
										</select>
										<div class="invalid-feedback">
											Golongan darah belum dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="alamat">Alamat</label>
										<input type="text" class="form-control" id="alamat" placeholder="masukkan alamat anda" name="alamat" required>
										<div class="invalid-feedback">
											Nik Belum Dimasukkan
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="rt">RT/RW (Contoh Format:000/000)</label>
										<input type="text" class="form-control" id="rt" placeholder="masukkan rt/rw anda" name="rt" required>
										<div class="invalid-feedback">
											Nama Belum Dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="kelurahan">Kelurahan</label>
										<input type="text" class="form-control" id="kelurahan" placeholder="masukkan kelurahan" name="kelurahan" required>
										<div class="invalid-feedback">
											Kelurahan belum dimasukkan
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="kecamatan">Kecamatan</label>
										<input type="text" class="form-control" id="kecamatan" placeholder="masukkan kecamatan anda" name="kecamatan" required>
										<div class="invalid-feedback">
											Kecamatan Belum Dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="agama">Agama</label>
										<select class="custom-select" id="agama" name="agama" required>
											<option selected disabled value="">Agama...</option>
											<option>Protestan</option>
											<option>Hindu</option>
											<option>Buddha</option>
											<option>Katolik</option>
											<option>Islam</option>
											<option>Konghucu</option>
											<option>Atheis</option>
										</select>
										<div class="invalid-feedback">
											Agama belum dimasukkan
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="status">Status</label>
										<select class="custom-select" id="status" name="status">
											<option selected disabled value="">Status...</option>
											<option>Lajang</option>
											<option>Telah Menikah</option>
											<option>Cerai Hidup</option>
											<option>Cerai Mati</option>
										</select>
										<div class="invalid-feedback">
											Status belum dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="pekerjaan">Pekerjaan</label>
										<input type="text" class="form-control" id="pekerjaan" placeholder="masukkan alamat anda" name="pekerjaan">
										<div class="invalid-feedback">
											Pekerjaan Belum Dimasukkan
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="kewarganegaraan">Kewarganegaraan</label>
										<select class="custom-select" id="kewarganegaraan" name="kewarganegaraan">
											<option selected disabled value="">Kewarganegaraan....</option>
											<option>WNI</option>
											<option>WNA</option>
										</select>
										<div class="invalid-feedback">
											Status belum dimasukkan
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<label for="berlaku">Berlaku Sampai</label>
										<input type="date" class="form-control" id="berlaku" placeholder="masukkan tanggal anda" name="berlaku">
										<div class="invalid-feedback">
											Masa Berlaku belum diisi
										</div>
									</div>
								</div>
								<div class="form-group">
									<label> Foto </label>
									<input type="file" class="form-control" name="foto" >
								</div>
								<button class="btn btn-primary" type="submit">Submit form</button>
							</form>
							<?php
							@$PAGE = $_GET['page'];
							?>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
							
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>
			<table class="table table-bordered table-dark" id="tabel">
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
						<th>AKSI</th>

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
							<td>
								<a href="edit.php?id=<?php echo $d['id']; ?>"  class="crud"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
										<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
											<path d="M0,172v-172h172v172z" fill="none"></path>
											<path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#2ecc71"></path>
											<g>
												<path d="M32.00525,102.84056l84.31323,-84.31618l37.15628,37.15498l-84.31323,84.31618z" fill="#ff9800"></path>
												<path d="M32.11001,102.8383l-13.47333,50.525l50.525,-13.47333z" fill="#ffc107"></path>
												<path d="M25.37334,128.43763l-6.73667,24.92567l24.92567,-6.73667z" fill="#455a64"></path>
											</g>
										</g>
									</svg></a>
								<a href="delete.php?id=<?php echo $d['id']; ?>" onclick = "return confirm('YAKIN?');" id="delete" class="crud"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
										<g transform="">
											<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
												<path d="M0,172v-172h172v172z" fill="#ff0000"></path>
												<g>
													<path d="M39.41667,46.58333v89.58333c0,7.91558 6.41775,14.33333 14.33333,14.33333h57.33333c7.91558,0 14.33333,-6.41775 14.33333,-14.33333v-89.58333z" fill="#9fa8da"></path>
													<path d="M78.83333,53.75h7.16667v82.41667h-7.16667zM100.33333,53.75h7.16667v82.41667h-7.16667zM57.33333,53.75h7.16667v82.41667h-7.16667z" fill="#7986cb"></path>
													<g fill="#5c6bc0">
														<path d="M39.41667,35.83333h86v14.33333h-86z"></path>
														<path d="M32.25,46.58333h100.33333v14.33333h-100.33333zM68.08333,43v-14.33333h28.66667v14.33333h7.16667v-14.33333c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667h-28.66667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v14.33333z"></path>
													</g>
												</g>
												<path d="" fill="none"></path>
												<path d="" fill="none"></path>
											</g>
										</g>
									</svg></a>
							</td>
						</tr>

					</tbody>
				<?php
				}
				?>
			</table>

			<!--Script-->
			<!-- <script src="js/bootstrap.min.js"></script> -->
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/main.js"></script>
			<script src="js/sweetalert2.all.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
			
			<script>
				// Example starter JavaScript for disabling form submissions if there are invalid fields
				(function() {
					'use strict';
					window.addEventListener('load', function() {
						// Fetch all the forms we want to apply custom Bootstrap validation styles to
						var forms = document.getElementsByClassName('needs-validation');
						// Loop over them and prevent submission
						var validation = Array.prototype.filter.call(forms, function(form) {
							form.addEventListener('submit', function(event) {
								if (form.checkValidity() === false) {
									event.preventDefault();
									event.stopPropagation();
								}
								form.classList.add('was-validated');
							}, false);
						});
					}, false);
				})();
				$(document).ready(function() {
	$('#tabel').DataTable();
	
} );
			</script>


</body>

</html>