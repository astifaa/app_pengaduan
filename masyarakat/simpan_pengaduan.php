<?php
// koneksi database
include '../koneksi/koneksi.php';

$tgl =$_POST['tgl_pengaduan'];
$nik =$_POST['nik'];
$isi =$_POST['isi_laporan'];
$status =$_POST['status'];
$fileName = $_FILES['foto']['name'];

  // Simpan ke Database
$sql = "INSERT into pengaduan (tgl_pengaduan,nik,isi_laporan,status,foto) values ('$tgl','$nik','$isi','$status','$fileName')";

mysqli_query($koneksi, $sql);
  // Simpan di Folder Gambar
move_uploaded_file($_FILES['foto']['tmp_name'], "../masyarakat/gambar/".$_FILES['foto']['name']);
echo"<script>alert('Pengaduan Telah Dibuat !');history.go(-1);</script>"; 
?>