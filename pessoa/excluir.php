<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id = $id";
    if(mysqli_query($conn, $sql)) {
        header('Location: index.php');
    }
?>