<!doctype html>
<html lang="en">
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
  <body class="text-center">
    
    <main class="form-signin">
      <div class="card-body bg-white rounded">
        <form action="login-proses.php" method="post">
          <span class="text-info" data-feather="slack"></span>
          <h1 class="h3 mb-3 fw-normal">Mohon Login Dulu</h1>

          <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Ingat saya
              | Buat akun? <a href="login-register.php"> disini</a>
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Login</button>
          <a href="#" class="mt-5 mb-3 text-muted"> Bantuan</a>
          <p class="mt-5 mb-3 text-muted">&copy; JWD Ardia Refdinal 2021</p>
        </form>
      </div>
    </main>
    <script src="../vendor/feather/dist/feather.min.js"></script>
    <script src="../assets/js/script.js"></script>
  </body>
</html>
