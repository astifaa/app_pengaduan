<?php include'../layout/header_admin.php'; ?>
<?php include'../layout/nav_admin.php'; ?>
<?php
include '../koneksi/koneksi.php';

//user
$data_user= mysqli_query($koneksi,"SELECT * FROM petugas");
$jumlah_user = mysqli_num_rows($data_user);

$data_admin= mysqli_query($koneksi,"SELECT * FROM petugas");
$jumlah_admin = mysqli_num_rows($data_admin);

$data_mas= mysqli_query($koneksi,"SELECT * FROM masyarakat");
$jumlah_mas = mysqli_num_rows($data_mas);

$data_petugas= mysqli_query($koneksi,"SELECT * FROM petugas");
$jumlah_petugas = mysqli_num_rows($data_petugas);


$data_all_pengaduan= mysqli_query($koneksi,"SELECT * FROM pengaduan");
$jumlah_all_pengaduan = mysqli_num_rows($data_all_pengaduan);


$data_masuk= mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='belum diproses'");
$jumlah_masuk = mysqli_num_rows($data_masuk);

$data_diproses= mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='diproses'");
$jumlah_diproses = mysqli_num_rows($data_diproses);

$data_selesai= mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='selesai'");
$jumlah_selesai = mysqli_num_rows($data_selesai);


?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo $jumlah_all_pengaduan; ?></h3>

            <p>SEMUA PENGADUAN</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3><?php echo $jumlah_masuk; ?></h3>

            <p>PENGADUAN MASUK</p>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?php echo $jumlah_diproses; ?></h3>

            <p>PENGADUAN DIPROSES</p>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?php echo $jumlah_selesai; ?></h3>

            <p>PENGADUAN SELESAI</p>
          </div>
        </div>
      </div>
       <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <h3><?php echo $jumlah_user; ?></h3>

            <p>USER</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <h3><?php echo $jumlah_admin; ?></h3>

            <p>ADMIN</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <h3><?php echo $jumlah_petugas; ?></h3>

            <p>PETUGAS</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <h3><?php echo $jumlah_mas; ?></h3>

            <p>MASYARAKAT</p>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body pt-0">
    <!--The calendar -->
    <div id="calendar" style="width: 100%"></div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<?php include'../layout/footer.php'; ?>