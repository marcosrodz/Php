<?php
    include 'conecta.php';
    $usuario = $_SESSION['user'];
    $menu_query = "SELECT * FROM usuario WHERE login = '$usuario' AND tipo = '1'";
    result = $con -> query($menu_query);
    if($result->num_rows > 0) {
        
    }else {

    }
?>