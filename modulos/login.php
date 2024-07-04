<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Punto </b>de Venta</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicio de sesión</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Ingrese el nombre de usuario" name="username" id="username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-user"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Ingrese la contraseña" name="password" id="password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
        <?php
        $objUsuarios = new ControladorUsuarios();
        $objUsuarios->ctrlLogin();
        ?>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvide contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro" class="text-center">Registro</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
