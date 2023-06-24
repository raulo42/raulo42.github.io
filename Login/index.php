<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Ingar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <?php
    session_start();
    if(isset($_SESSION['mensaje'])){
        $respuesta = $_SESSION ['mensaje'];?>
    <script>

        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '<?php $respuesta ?>',
            showConfirmButton: false,
            timer: 1500
        })

    </script>
        <?php
    }
    ?>

    <center>
        <img src="https://img.freepik.com/foto-gratis/concepto-collage-control-calidad-estandar_23-2149595830.jpg?w=1380&t=st=1687273171~exp=1687273771~hmac=147fe457710afe0a3adacdeb7830cd7dab9f7ca73823219a8b5fd68dfe904bf0"
             alt="" width="300">
    </center>
    <br>
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../public/templates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de</b>Control</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Inicie Sesion</p>
            <form action="../app/controllers/login/ingreso.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password_user" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!--   <div class="social-auth-links text-center mt-2 mb-3">
                   <a href="#" class="btn btn-block btn-primary">
                       <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                   </a>
                   <a href="#" class="btn btn-block btn-danger">
                       <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                   </a>
               </div>
                /.social-auth-links -->
            <br>
            <p class="mb-1">
                <a href="../public/templates/AdminLTE-3.2.0forgot-password.html">Olvide mi contraseña</a>
            </p>
            <p class="mb-0">
                <a href="../public/templates/AdminLTE-3.2.0register.html" class="text-center">Registrar un nuevo Usuario</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
