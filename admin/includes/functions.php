<?php

// FUNÇÃO DE INSERIR CATEGORIA
function inserirCategoria(){
  global $connection;
  if(isset($_POST['enviar'])){

    $cat_nome = $_POST['cat_nome'];

    if($cat_nome == ""){
      echo "Insira uma categoria";
    }
    else{
    $query = "INSERT INTO categoria(cat_nome) VALUE('$cat_nome')";
    $resultado = mysqli_query($connection, $query);

    if(!$resultado){
      echo "Não deu certo a inclusão";
    } else {
      echo "Categoria adicionada com sucesso!";
      }
    }
  }
}
// FUNÇÃO DE MOSTRAR CATEGORIAS
function mostrarDadosCategoria(){
  global $connection;

  $query = "SELECT * FROM categoria";
  $select_todas_categorias = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($select_todas_categorias)){
      $cat_id = $row['cat_id'];
      $cat_nome = $row['cat_nome'];
      echo   '<tr>';
      echo   '<td>' . $cat_id . '</td>';
      echo   '<td>' . $cat_nome . '</td>';
      echo   '<td><a href="categorias.php?delete='. $cat_id .'">Apagar</a></td>';
      echo   '<td><a href="categorias.php?edit=' . $cat_id  .'">Editar</a></td>';
      echo    '</tr>';
  }
}
// FUNÇÃO DE APAGAR CATEGORIA
function apagaCategoria(){
  global $connection;
  if(isset($_GET['delete'])){
      $apaga_cat_id = $_GET['delete'];

      $query = "DELETE FROM categoria WHERE cat_id = $apaga_cat_id";
      $apagandoId = mysqli_query($connection, $query);
      header("Location: categorias.php");

  }
}


 ?>
