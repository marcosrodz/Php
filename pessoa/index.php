<!DOCTYPE html>
<html>
    <head>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
        <meta charset = "utf8">
        <title>Cadastro de Cliente</title>
    </head>
    <body>
        <center><h2>Cadastro de Clientes</h2></center>
        <hr/>
        <center><a href = "cadcliente.php">Cadastrar novo cliente</a></center>
        <br/><br/>
        <center>
        <table border = "1">
            <tr>
                <td><b>Id</b></td>
                <td><b>Nome</b></td>
                <td><b>Celular</b></td>
                <td><b>Ações</b></td>
            </tr>
            <?php
                include 'conecta.php';
                $pesquisa = mysqli_query($conn, "SELECT * FROM cliente");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0) {
                    while($cliente = $pesquisa -> fetch_array()) {
                        $id = $cliente['id'];
                        print "<tr>";
                        print "<td>".$cliente['id']."</td>";
                        print "<td>".$cliente['nome']."</td>";
                        print "<td>".$cliente['celular']."</td>";
                        print "<td><a href = 'editar.php?id=$id'>Editar</a>   |   <a href = 'excluir.php?id=$id'>Excluir</a></td>";
                        print "</tr>";
                    }
                }else {
                    print "Não há clientes para listar!!!";
                    print "</tr>";
                    mysqli_close($conn);
                }
            ?>
        </table>
        <?php print "<br/><b>Número de registros: </b>".$row; ?>
        </center>
    </body>
    <?php?>
</html>