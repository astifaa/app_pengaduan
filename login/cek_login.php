<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../koneksi/koneksi.php';

// menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);
$op = $_GET['op'];


// cek apakah username dan password di temukan pada database
if($op = "in"){
// menyeleksi data user dengan username dan password yang sesuai
  $login = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");

  if (mysqli_num_rows($login) == 1) {
   $data = mysqli_fetch_assoc($login);

   $_SESSION['id_petugas'] = $data['id_petugas'];
   $_SESSION['nama_petugas'] = $data['nama_petugas'];
   $_SESSION['username'] = $data['username'];
   $_SESSION['telp'] = $data['telp'];

  if($data['level']=="admin"){
    // alihkan ke halaman dashboard admin
  header("location:../admin/admin.php");

  } else if($data['level'] == "petugas"){
  header("location:../petugas/petugas.php");
  } 
  // cek jika user login sebagai petugas
} else{

    // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
}  
}else{
  header("location:index.php?pesan=gagal");
}

?>