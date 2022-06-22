<?php
    $conn = mysqli_connect("localhost","root","","pessoa2");
    mysqli_set_charset($conn,"utf8");
    if(!$conn) {
        print 'Erro de Conexão: '.mysqli_connect_error();
    }