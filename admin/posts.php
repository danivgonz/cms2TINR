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
                            Posts
                            <small>ver todos os posts</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Posts
                            </li>
                        </ol>

                          <div class="col-sm-12">

                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Título</th>
                                  <th>Autor</th>
                                  <th>Imagem</th>
                                  <th>Data</th>
                                  <th>Conteúdo</th>
                                </tr>
                               </thead>

                               <tbody>

                                 <?php
                                 $query = "SELECT * FROM posts";
                                 $select_todos_posts =  mysqli_query($connection, $query);

                                 while($row = mysqli_fetch_assoc($select_todos_posts)){
                                   $post_id = $row['post_id'];
                                   $post_nome = $row['post_nome'];
                                   $post_autor = $row['post_autor'];
                                   $post_imagem = $row['post_imagem'];
                                   $post_data = $row['post_data'];
                                   $post_conteudo = $row['post_conteudo'];

                                    echo "<tr>";
                                    echo "<td>" . $post_id . "</td>";
                                    echo "<td>" . $post_nome . "</td>";
                                    echo "<td>" . $post_autor . "</td>";
                                    echo "<td class=col-sm-2><img src='../images/$post_imagem' class='img-responsive'></td>";
                                    echo "<td>" . $post_data . "</td>";
                                    echo "<td>" . $post_conteudo . "</td>";
                                    echo "</tr>";

                                 }

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
