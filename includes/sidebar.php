<div class="col-md-4">

    <!-- Login -->
    <div class="well">
        <h4>Login</h4>
        <form action="includes/login.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class"form-control" placeholder="Usuário">
            </div>
            <div class="form-group">
                <input name="password" type="password" class"form-control" placeholder="Senha">
            </div>
            <button class="btn btn-primary" name="login" type="submit">Entrar</button>
        </form>
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                  <?php
                  $query = "SELECT * FROM categoria";
                  $select_todas_categorias = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_todas_categorias)){
                      $cat_nome = $row['cat_nome'];
                      echo '<li><a href="#">' . $cat_nome . '</a></li>';
                  }
                  ?>
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

  
</div>
