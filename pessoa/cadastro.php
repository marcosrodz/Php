<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $sql ="INSERT INTO cliente(nome,celular) VALUES ('$nome','$celular')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: index.php');
?>