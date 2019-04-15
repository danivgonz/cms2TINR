<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
        <!-- /.input-group -->
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
