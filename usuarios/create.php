<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registo de Nuevos Usuarios</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Alta de Usuarios</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/usuarios/create.php" method="post">
                                        <div class="form-group">
                                            <labe for="">Nombres</labe>
                                            <input name="nombres" type="text" class="form-control"placeholder="Nombre nuevo Usuario...">
                                        </div>
                                        <div class="form-group">
                                            <labe for="">E-Mail</labe>
                                            <input name="email" type="email" class="form-control"placeholder="Ingrese el E-Mail...">
                                        </div>
                                        <div class="form-group">
                                            <labe for="">Contraseña</labe>
                                            <input name="password_user" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <labe for="">Repita la Contraseña</labe>
                                            <input name="password_repeat" type="text" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>


<?php include ('../layout/parte2.php');  ?>
