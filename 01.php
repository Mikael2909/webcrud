<!doctype html>
<html lang="en">
  <head>
  	<title> Beranda </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="bg-primary text-white">
				<div class="p-4 pt-5 ">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/rsz_mikael.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	              <a href="#"> Beranda </a>
	          </li>
              </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Designed by Mikael Petrus Saragi
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
            <a href="keluar.php" class="btn btn-info mr-5"> KELUAR </a>
          </div>
        </nav>

        <h2 class="mb-4 text-center"><b> Website CRUD </b></h2>
        <div class="container">
        <div class="main mt-5">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
        INSERT DATE
        </button>

        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-body">
            <div class="container">
    <div class="main mt-5">
        <center>
  <h2> CREATE DATA </h2>
  </center>

  <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">

  <div class="form-group">
      <label for="nama"> Nama </label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama" required="required">
    </div>

    <div class="form-group">
      <label for="email"> Email </label>
      <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" name="email" required="required">
    </div>

    <div class="form-group">
      <label for="alamat"> Alamat </label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" required="required">
    </div>
    
    <div class="form-group">
      <label for="tanggal"> Tanggal </label>
      <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Anda" name="tanggal" required="required" autocompleted>
    </div>

    <div class="form-group">
      <label> Foto </label>
      <input type="file" class="form-control" name="foto" required="required">
    </div>

    <button type="submit" class="btn btn-success"> Save </button>
    <button type="reset" class="btn btn-danger"> Cancel </button>
  </form>
  </div>
</div>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Tutup </button>
            </div>

    </div>
  </div>
</div>

<a href="cetak.php" target="_blank" class="ml-3">  <img src="images/printer.png" alt="Cetak" style="width:42px;height:42px;"> </a>

        <br>
        <br>
        <table id="myTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM crud"); 
                while($d = mysqli_fetch_array($data)) {
                ?>
            <tbody>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['email'];?></td>
                    <td><?php echo $d['alamat'];?></td>
                    <td><?php echo $d['tanggal'];?></td>
                    <td>
                        <img src="images/<?php echo $d['foto'];?>" alt="Foto" width="80" height="100">
                    </td>
                    <td>
                    <a href="edit.php?id=<?php echo $d['id'];?>" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                    <a href="hapus.php?id=<?php echo $d['id'];?>" class="btn btn-danger" onclick = "return confirm('YAKIN?');"> <i class="fas fa-trash-alt"></i> </a>
                    </td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
        </table>
        </div>
    </div>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
  </body>
</html>