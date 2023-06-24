<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/listado_de_usuarios.php');?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lstado de Usuarios</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="md-8"></div>
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios Registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                           </div>
                       </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-sm">
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                </tr>
                                <tbody>
                                <?php

                                foreach ($usuarios_datos as $usuarios_dato){?>
                                <tr>
                                    <td><?php echo $usuarios_dato['id_usuario']?></td>
                                    <td><?php echo $usuarios_dato['nombres']?></td>
                                    <td><?php echo $usuarios_dato['email']?></td>
                                </tr>

                                <?php
                                }
                                ?>

                                </tbody>
                            </table>
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
