<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ventas Online</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <center> 
  <img src="https://img1.freepnges.com/20240106/skf/transparent-business-shopping-bags-green-bag-yellow-bag-zipper-two-bags-one-green-with-zipper-other-yellow-1710934674164.webp" 
        alt="" width="300px"">
        </center>x
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../public/template/AdminLTE-3.2.0/index2.html" class="h1"><b>Ventas </b>Online</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus datos</p>

      <form action="../app/controladores/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="correo_eletronico" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="clave" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
                    </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="..//public/template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="..//public/template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
