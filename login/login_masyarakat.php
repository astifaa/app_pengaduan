<!doctype html>
<html lang="en">
<head>
	<title>Login - Aplikasi Pengaduan Masyarakat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-light">
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
			<h2 class="heading-section">Hallo Selamat Datang! Masyarakat</h2>
		</div>
		</div>
	<div class="row justify-content-center">
		<div class="col-md-6 col-lg-4">
			<div class="login-wrap py-5">

			<form action="cek_login_mas.php?op=in" method="post" class="login-form">
			<div class="form-group">
			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
			<input type="text" class="form-control" placeholder="Username" name="username" required>
			</div>
			<div class="form-group">
			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
			<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>

			<div class="form-group">
			<button type="submit" class="btn form-control btn-primary rounded submit px-3">Masuk</button>
			</div>
			</form>

			<div class="form-group d-md-flex">
			<div class="w-100 text-md-right">
			<a href="#" data-toggle="modal" data-target="#exampleModalCenter">Belum Memiliki Akun?</a>
			</div>
			</div>
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registrasi Masyarakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="cek_login_mas.php">
                    <div class="modal-body" style="color: black">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">NIK</label>
                            <input type="text" name="username" class="form-control validation text-dark">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nama Lengkap</label>
                            <input type="text" name="username" class="form-control validation">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Username</label>
                            <input type="text" name="username" class="form-control validation">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Password</label>
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">No Telp</label>
                            <input type="text" name="telp" class="form-control">
                            <input type="text" name="masyarakat" hidden class="form-control">
                          </div>
                        </div>
                        <div class="col-4 col-md-4">
                          <div class="form-group">                      
                            <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
		  </div>
		</div>
	</div>
</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

