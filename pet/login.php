<?php
    session_start();
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $logar = mysqli_query($con, "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0) {
        $_SESSION["user"] = $_POST['login'];
        header('location:dash.php');
    }
    else {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');window.location.href='index.php';</script>");
    }
?>