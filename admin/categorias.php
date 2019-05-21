<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>

    <div id="wrapper">
        <!-- Navigation -->
 <?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Seja bem vindo
                            <small>Gustavo</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Categorias
                            </li>
                        </ol>

                          <div class="col-sm-6">

                            <?php
                              // Inserir função insereCategoria
                              inserirCategoria();
                             ?>


                              <form action="categorias.php" method="post">

                                <div class="form-group">
                                  <label>Adicionar categoria</label>
                                  <input type="text" class="form-control" name="cat_nome">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="enviar" value="Adicionar">
                                </div>

                               </form>

                                <hr>
                                <?php
                                if(isset($_GET['edit'])){
                                  include "includes/editar_categoria.php";
                                }?>


                          </div>
                        <!-- Fecha col-sm-6-->

                              <div class="col-sm-6">

                                <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Nome da Categoria</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  // Inserir função mostrarDadosCategoria
                                  mostrarDadosCategoria();
                                  ?>
                                  <?php
                                  // Inserir função apagaCategoria
                                  apagaCategoria();
                                   ?>
                                  </tbody>

                                </table>
                              </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
