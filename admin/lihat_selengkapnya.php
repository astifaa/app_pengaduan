<?php include'../layout/header_admin.php'; ?>
<?php include'../layout/nav_admin.php'; ?>
<?php 
include '../koneksi/koneksi.php';
?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <?php
      $no=1;
      $spp = mysqli_query($koneksi,"
        SELECT * 
        FROM 
        pengaduan,masyarakat
        WHERE pengaduan.nik=masyarakat.nik AND pengaduan.status ='selesai'");

      while($d = mysqli_fetch_array($spp)){
        ?>
        <div class="col-4">
          <div class="card" style="width: 18rem; height: 20rem">
            <img style="width: 18rem; height: 10rem" src="../masyarakat/gambar/<?php echo "$d[foto]" ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <h6 style="color: blue">Nama Pengadu : <?php echo "$d[nama]"; ?></h6><br>
                <?php echo "$d[isi_laporan]"; ?>
                  <a href="lihat_selengkapnya.php">Lihat Selengkapnya..</a>
                </p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </section>

  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include'../layout/footer.php'; ?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

