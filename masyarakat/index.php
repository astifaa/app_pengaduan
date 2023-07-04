<?php
session_start();
?>;
<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title><!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="riwayat.php">Riwayat Pengaduan</a>
							</li>
						</ul>
						<form class="d-flex" method="post" action="keluar.php">
							<button class="btn btn-outline-success" type="submit">Keluar</button>
						</form>
					</div>
				</div>
			</nav>
			<div class="col-6 bg-white">
				<img src="../assets/img/mas.jpg" class="mt-5">
			</div>
			<div class="col-6 bg-light pb-3">
				<p>Form Pengaduan</p>
				<form method="post" action="simpan_pengaduan.php" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Tanggal</label>
						<input type="text" name="tgl_pengaduan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo date('Y-m-d') ?>" readonly>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">NIK</label>
						<input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $_SESSION['nik']?>" readonly>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Nama</label>
						<input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?php echo $_SESSION['nama']?>" readonly>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Foto</label>
						<input type="file" name="foto" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Isi Pengaduan</label>
						<textarea type="text" name="isi_laporan" class="form-control" id="exampleInputPassword1"></textarea>
						<input type="text" name="status" value="belum diproses" hidden>
					</div>
					<button type="submit" class="btn btn-primary">Berikan Pengaduan</button>
				</form>
			</div>
		</div>
	</div>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>