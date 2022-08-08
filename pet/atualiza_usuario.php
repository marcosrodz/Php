<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    if(!isset($_POST['tipo'])) {
        $tipo = 0;
    } else {
        $tipo = 1;
    }
    $sql = "UPDATE usuario SET login = '$login', senha = '$senha', tipo = '$tipo', data = NOW() WHERE id = '$id'";
    if(mysqli_query($con, $sql)) {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário atualizado com sucesso');
        window.location.href = 'usuario.php';
        </script>";
    } else {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário não atualizado');
        window.location.href = 'usuario.php';
        </script>";
    }
    mysqli_close($con);
?>
