<?php
    $con = mysqli_connect("127.0.0.1","root","","pet");
    if(!$con) {
        echo mysqli_error();
    }
?>