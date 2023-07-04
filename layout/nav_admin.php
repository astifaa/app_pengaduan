    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Kontak</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <?php
      include '../koneksi/koneksi.php';


      $data_baru= mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='belum diproses'");
      $jumlah_baru = mysqli_num_rows($data_baru);
      ?>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <?php
          if ($jumlah_baru !=0) {

            echo
            "<span class='badge badge-info navbar-badge'>
            $jumlah_baru</span>";
          }

          ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      
          <div class="dropdown-divider"></div>
          <a href="../admin/data_pengaduan_masuk.php" class="dropdown-item">
            <i class="fas fa-bullhorn mr-2"></i><?php echo $jumlah_baru; ?> Pengaduan Baru
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="../login/logout.php" class="btn btn-block btn-danger btn-sm" title="Apakah Anda Akan Keluar?"><i class="far fa-close"></i> Keluar</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Beranda</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
