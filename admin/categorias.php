<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php ob_start(); ?>

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
                            <small>Daniela Verissimo</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>

                        <div class="col-sm-6">

                          <?php
                            if (isset($_POST['enviar'])) {
                              $cat_nome = $_POST['cat_nome'];

                              if ($cat_nome != null) {
                                $query = "INSERT INTO categoria(cat_nome) VALUE ('$cat_nome')";
                                $resultado = mysqli_query($connection, $query);

                                if (!$resultado) {
                                  echo "Não deu certo a inclusão!";
                                } else {
                                  echo "Categoria adicionada com sucesso!";
                                }
                              }else {
                                echo "O campo deve estar preenchido!";
                              }

                            }


                            if (isset($_GET['delete'])) {
                              $apaga_cat_id = $_GET['delete'];
                              $delete = "DELETE FROM categoria WHERE cat_id = $apaga_cat_id";
                              $resultado = mysqli_query($connection, $delete);
                              header("Location: categorias.php");
                            }

                           ?>

                          <form action="categorias.php" method="post" class="">
                            <div class="form-group">
                              <label for="">Adicionar categoria</label>
                              <input type="text" class="form-control" name="cat_nome">
                            </div>

                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
                            </div>
                          </form>

                        </div>

                        <div class="col-sm-6">
                          <table class="table table-striped">
                            <thead class="thead-light">
                              <tr>
                                <th>ID</th>
                                <th>Nome da Categoria</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $query = "SELECT * FROM categoria";
                              $todas_categorias = mysqli_query($connection, $query);

                              while ($row = mysqli_fetch_assoc($todas_categorias)) {
                                $cat_id = $row['cat_id'];
                                $cat_nome = $row['cat_nome'];

                               ?>

                              <tr>
                                <td><?php echo $cat_id; ?></td>
                                <td><?php echo $cat_nome; ?></td>
                                <td align="center"><a href="categorias.php?delete=<?php echo $cat_id; ?>" style="color: #000000;"><i class="fa fa-trash"></i></a></td>
                              </tr>

                            <?php } ?>
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
