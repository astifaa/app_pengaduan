<?php 
session_start();
include '../koneksi/koneksi.php';
$id_pengaduan = $_GET['id_pengaduan'];

$terima = mysqli_query($koneksi,"UPDATE pengaduan SET 
	status = 'diproses'			
	WHERE id_pengaduan = '$id_pengaduan'");

if ($terima) {

	header('location: data_pengaduan_masuk.php');
}else {
	echo "
	<script>
	alert('Gagal Menerima Pengaduan!')
	</script>
	";
}

if($_GET['act']=='tolak'){
	$id_pengaduan = $_GET['id_pengaduan'];

	$tolak = mysqli_query($koneksi,"UPDATE pengaduan SET 
		status = 'ditolak'			
		WHERE id_pengaduan = '$id_pengaduan'");

	if ($tolak) {
		header('location: data_pengaduan_masuk.php');
	}
	}
	?>