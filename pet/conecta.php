<?php
    $con = mysqli_connect("127.0.0.1","root","","pet");
    mysqli_set_charset($con, "utf8");
    if(!$con){
        print mysqli_connect_error();
    }else{
        print 'conectado com sucesso';
    }
?>