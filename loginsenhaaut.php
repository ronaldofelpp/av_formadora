<?php 
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login=='23107997' and $senha=='1234'){
        header('location: autenticado.php');
    } else {
        header('location: erro.html');
    }

?>