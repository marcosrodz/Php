<?php
    session_start();
    $user = $_SESSION["user"];
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])) {
        setcookie(session_name(),'',time()-1000,'/');
    }
    session_destroy();
    header('location:index.php');
?>