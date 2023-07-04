<?php include'../layout/header_admin.php'; ?>
<?php include'../layout/nav_admin.php'; ?>
<?php 
include '../koneksi/koneksi.php';
?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-3">
        <h5>Data Pengaduan Selesai</h5>
      </div>
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
                <span class="badge bg-info text-dark"><?php echo $d['status']; ?></span>
                <a style="color: blue; font-size: 15px"> 
                  <i class="fa fa-user">&nbsp;</i>
                  <?php echo "$d[nama]"; ?></a><br>
                  <?php echo substr($d['isi_laporan'],0,100); ?>
                  <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Lihat Selengkapnya..</a>
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
<script src="rupiah.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  // Format mata uang.
  $( '.uang' ).mask('000.000.000', {reverse: false});

})
</script>

<script type="text/javascript">
  $(document).on("click", "#lihat_modal", function(){
    var nik = $(this).data('nik');
    var isi_laporan = $(this).data('isi_laporan');
    var id_pengaduan = $(this).data('id_pengaduan');
    var foto = $(this).data('foto');

    $("#tampil_modal #nik").val(nik);
    $("#tampil_modal #isi_laporan").val(isi_laporan);
    $("#tampil_modal #id_pengaduan").val(id_pengaduan);
    $("#tampil_modal #foto").val(foto);

    function tampil_histori(){
      var nisn=document.getElemenByid("nisn").innerHTML;
      document.getElemenByid("hasil").innerHTML=nisn;
    }
  })
  var myImage = new Image(300, 300);
  myImage.src = '../masyarakat/foto/';
  x = document.getElementById("foto");
  x.appendChild(myImage);         
</script>