<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='$usuario' AND tipo='1'";
    $result = $con->query($menu_query);
    if($result->num_rows > 0) {
        print "<li class='nav-item'><a class='nav-link' href='dash.php'>Home</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='agendamento.php'>Agendamento</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='entrega.php'>Entrega</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='cliente.php'>Cliente</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='produto.php'>Produto</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='usuario.php'>Usuario</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='relatorio.php'>Relatórios</a></li>";
    }
    else {
        print "<li class='nav-item'><a class='nav-link' href='dash.php'>Home</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='agendamento.php'>Agendamento</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='entrega.php'>Entrega</a></li>";
        print "<li class='nav-item'><a class='nav-link' href='cliente.php'>Cliente</a></li>";
    }
?>