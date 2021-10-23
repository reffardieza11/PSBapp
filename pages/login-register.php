<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<title>Aplikasi Pendaftaran Siswa Baru</title>

	<!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style-login.css" rel="stylesheet">

</head>
<body>
	<section class="container-fluid">
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4 bg-white rounded m-2">
            <form class="form-register" method="post" action="login-register-proses.php" onsubmit="if(document.getElementById('agree').checked)">
                <h4 class="text-center font-weight-bold"> Daftar Akun </h4>
                <div class="form-group pt-2">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group pt-2">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" minlength="16" maxlength="16" required>
                </div>
                <div class="form-group pt-2">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="abcde123@gmail.com" required>
                </div>
                <div class="form-group pt-2">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="abcde123" required>
                </div>
                <div class="form-group pt-2">
                    <label for="tmpt_lhr">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" placeholder="Masukkan kota kelahiran" required>
                </div>
                <div class="form-group pt-2">
                    <label for="tgl_lhr">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lr" name="tgl_lhr" placeholder="Masukkan tgl_lhr" required>
                </div>
                <div class="form-group pt-2">
                    <label for="jk">Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" id="jk" name="jk" value="L" required> Laki-laki
                    <input type="radio" class="form-check-input" id="jk" name="jk" value="P" required> Perempuan
                </div>
                <div class="form-group pt-2">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat rumah" required></textarea>
                </div>
                <div class="form-group pt-2">
                    <label for="no">Nomor Telp</label>
                    <input type="text" class="form-control" id="no" name="no_telp" placeholder="08123456789" required>
                </div>
                <div class="form-group pt-2">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Minimal 8 digit" minlength="8" required>
                </div>
                <div class="form-group pt-2">
                    <label for="InputRePassword">Ulangi password</label>
                    <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Ulangi password"  minlength="8" required>
                </div>
                <div class="checkbox mb-4 mt-2 text-center">
		            <label>
		              <input type="checkbox" value="check" id="agree" class="form-check-input" required> Menyetujui peryaratan dan ketentuan
		            </label>
		        </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block mt-2">Daftar</button>
                <button type="reset" name="reset" value="reset" class="btn btn-danger btn-block mt-2">Reset</button>
                <div class="form-footer mt-2">
                    <p> Sudah punya account? <a href="login.php">Login</a></p>
                </div>
            </form>
        </section>
        </section>
    </section>

	<script src="../vendor/feather/dist/feather.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>