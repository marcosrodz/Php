<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id = '$id'";
    if(mysqli_query($con, $sql)) {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário excluido com sucesso');
        window.location.href = 'usuario.php';
        </script>";
    }else {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário não excluido');
        window.location.href = 'usuario.php';
        </script>";
    }
?>