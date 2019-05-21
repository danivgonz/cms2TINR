<?php include "db.php"; ?>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM usuario";

    $select_usuario = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_usuario)){
        $db_user = $row['username'];
        $db_pass = $row['user_password'];
        $db_nome = $row['user_nome'];
    }

    if ($username !== $db_user && $password !== $db_pass) {
        header('Location: ../index.php');
    }else if ($username == $db_user && $password == $db_pass) {
        $_SESSION['username'] = $db_user;
        $_SESSION['password'] = $db_pass;
        $_SESSION['nome'] = $db_nome;

        header('Location: ../admin');
    }else {
        header('Location: ../index.php');
    }
}


?>