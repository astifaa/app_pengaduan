<?php 
// koneksi database
include '../koneksi/koneksi.php';

//ke tanggapan
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan =$_POST['tgl_tanggapan'];
$isi_tanggapan = $_POST['isi_tanggapan'];
$id_petugas = $_POST['id_petugas'];

//ke pengaduan
$status = $_POST['status'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into tanggapan(id_pengaduan,tgl_tanggapan,isi_tanggapan,id_petugas) 
	VALUES('$id_pengaduan','$tgl_tanggapan','$isi_tanggapan','$id_petugas')
	");
mysqli_query($koneksi,"UPDATE pengaduan set status='$status' where id_pengaduan='$id_pengaduan'");

// mengalihkan halaman kembali
header("location:../admin/data_pengaduan.php");

?>