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
                            <small>Adicionar novo post</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Adicionar novo Post
                            </li>
                        </ol>

                          <div class="col-sm-12">

                            <?php

                            if(isset($_POST['adicionar'])){
                            //  echo 'AEEE, PODE ADICIONAR';
                            $post_nome = $_POST['post_nome'];
                            $post_autor = $_POST['post_autor'];
                            $post_imagem = $_FILES['post_imagem']['name'];
                            $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];
                            $post_conteudo = $_POST['post_conteudo'];
                            move_uploaded_file($post_imagem_temp, '../images/' . $post_imagem);

                            $query = "INSERT INTO posts(post_nome, post_autor, post_data, post_conteudo, post_imagem)
                            VALUES('$post_nome', '$post_autor', now(), '$post_conteudo', '$post_imagem')";

                           $add_post = mysqli_query($connection, $query);

                           if(!$add_post){
                              echo "Falha na inserção";
                             } else {
                               echo "Post adicionado com sucesso!";
                             }

                          }
                            ?>


                            <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Título</label>
                                <input type="text" class="form-control" name="post_nome">
                              </div>

                              <div class="form-group">
                                <label>Autor</label>
                                <input type="text" class="form-control" name="post_autor">
                              </div>

                              <div class="form-group">
                                <label>Imagem</label>
                                <input type="file" class="form-control" name="post_imagem">
                              </div>

                              <div class="form-group">
                                <label>Conteúdo</label>
                                <textarea class="form-control" name="post_conteudo" cols="30" rows="10"></textarea>
                              </div>

                              <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="adicionar" value="ADICIONAR">
                              </div>

                            </form>

                          </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
