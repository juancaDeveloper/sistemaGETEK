<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SISTEMA DE VENTAS</b>GETEK</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Introduce su informacion para Ingresar</p>
    <?php if($this->session->flashdata("error")):?>

      <div class="alert alert-danger">
      <p><?php echo $this->session->flashdata("error")?></p>

      </div>

<?php endif; ?>

    <form action="<?php echo base_url();?>auth/login" method="post">
      <div class="form-group has-feedback">
        <input type="" class="form-control" name="username" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Ingresar con Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>Ingresar con Email</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">Yo olvide la contraseña</a><br>
    <a href="" class="text-center">Registrase de Nuevo</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
