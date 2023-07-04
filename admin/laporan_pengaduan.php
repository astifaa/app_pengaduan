<?php 
session_start();
if(isset($_SESSION['login']) ) {
	include '../koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan</title>
	
	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<a href="#" onclick="window.print();"><button class="print" style="float: right; width: 100px; height: 30px; background-color: #FFD4D4">CETAK</button></a>
	<h3><b>LAPORAN PENGADUAN MASYARAKAT</b></h3>
	<br/>
	<hr/>
	Tanggal <?= $_GET['tgl1']." -- ".$_GET['tgl2'];  ?>
	<br/>
	<br>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
	<tr>
		<th>NO</th>
		<th>NIK</th>
		<th>NAMA MASYARAKAT</th>
		<th>TANGGAL PENGADUAN</th>
		<th>ISI LAPORANN</th>
		<th>STATUS</th>
		<th>TANGGAPAN</th>
	</tr>
	<?php 
	$spp = $koneksi -> query("SELECT *
							FROM pengaduan
							INNER JOIN masyarakat  ON pengaduan.nik=masyarakat.nik
							INNER JOIN tanggapan  ON pengaduan.id_pengaduan=tanggapan.id_pengaduan
							WHERE pengaduan.tgl_pengaduan BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
							ORDER BY pengaduan.id_pengaduan ASC");
	$i=1;
	while($dta=mysqli_fetch_array($spp)) :
	 ?>
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $dta['nik'] ?></td>
		<td align="center"><?= $dta['nama'] ?></td>
		<td align=""><?= $dta['tgl_pengaduan'] ?></td>
		<td align=""><?= $dta['isi_laporan'] ?></td>
		<td align=""><?= $dta['status'] ?></td>
		<td align=""><?= $dta['isi_tanggapan'] ?></td>
	</tr>
	<?php $i++; ?>

<?php endwhile; ?>
	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Cimahi , <?= date('d/m/y') ?> <br/>
				Admin,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>
</body>
</html>


<?php 
} else {
	header("location : login.php");
}
?>