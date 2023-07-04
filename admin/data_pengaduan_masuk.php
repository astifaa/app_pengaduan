<?php include'../layout/header_admin.php'; ?>
<?php include'../layout/nav_admin.php'; ?>
<?php 
include '../koneksi/koneksi.php';
?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Pengaduan Masuk</h3>
          </div>
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  <tr>
                    <th>No</th>
                    <th>Tanggal Pengaduan</th>
                    <th>NIK</th>
                    <th>Isi Laporan</th>
                    <th>foto</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  $pengaduan = mysqli_query($koneksi,"
                    SELECT * 
                    FROM 
                    pengaduan
                    WHERE status ='belum diproses' ");

                  while($d = mysqli_fetch_array($pengaduan)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['tgl_pengaduan']; ?></td>
                      <td><?php echo $d['nik']; ?></td>
                      <td><?php echo $d['isi_laporan']; ?></td>
                      <td><?php echo $d['foto']; ?></td>
                      <td><i><?php echo $d['status']; ?><i></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                          <a class="btn btn-success btn-sm" href='proses_verifikasi.php?id_pengaduan=<?php echo $d['id_pengaduan']?>'>Terima</a>

                          <a class="btn btn-danger btn-sm" href='proses_verifikasi.php?id_pengaduan=<?php echo $d['id_pengaduan']?>&act=tolak'>Tolak</a>

                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="modal fade" id="isimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi Tanggapan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form method="post" action="simpan_verifikasi.php">
                    <div id="tampil_modal" class="card-body">
                     <div class="col-12">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="text" name="tgl_tanggapan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo date('Y-m-d') ?>" readonly>

                        <input type="text" class="form-control" value="<?php echo $_SESSION['id_petugas'] ?>" name="id_petugas" hidden>

                        <input type="text" class="form-control" id="id_pengaduan" name="id_pengaduan" hidden>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="text" name="foto" class="form-control" id="foto" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Isi Laporan</label>
                        <textarea type="text" name="isi_laporan" class="form-control" id="isi_laporan" readonly></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select type="text" name="status" class="form-control">
                          <option>diproses</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggapan</label>
                        <textarea type="text" name="isi_tanggapan" class="form-control" id="exampleInputPassword1"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Beri Tanggapan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
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