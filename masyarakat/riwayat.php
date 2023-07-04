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
							<a href="keluar.php" class="btn btn-outline-success">Keluar</a>
					</div>
				</div>
			</nav>
			<div class="col-12 bg-light">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Isi Laporan</th>
							<th scope="col">Status</th>
							<th scope="col">Tanggapan</th>
						</tr>
						</tr>
					</thead>
					<tbody>
						<?php 
                        include '../koneksi/koneksi.php';
                        $nik = $_SESSION['nik'];
                        $data = mysqli_query($koneksi,"SELECT * from pengaduan,tanggapan where nik=$nik and pengaduan.id_pengaduan = tanggapan.id_pengaduan");
                        $no=1;
                        while($d = mysqli_fetch_array($data)){
                          ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['tgl_pengaduan']; ?></td>
							<td><?php echo $d['isi_laporan']; ?></td>
							<td><?php echo $d['status']; ?></td>
							<td><?php echo $d['isi_tanggapan']; ?></td>

						</tr>
					<?php } ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	</body>
	</html>