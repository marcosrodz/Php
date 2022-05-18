<html>
    <body>
        <center>
        <h3>Teste de Banco - TDS08</h3>
        <hr/>
        <?php
            include 'conecta.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $query = $cont -> query($sql);
            while($dados = $query -> fetch_assoc()){
                $id = $dados['id'];
                $nome = $dados['nome'];
                $idade = $dados['idade'];
            }
        ?>
        <form action = "ed.php?id=<?php print $id;?>" method = "POST">
            Nome<br/>
            <input type = "text" name= "nome" value = "<?php print $nome;?>"/><br/>
            Idade<br/>
            <input type = "number" name = "idade" value = "<?php print $idade;?>"/><br/><br/>
            <input type = "submit" value = "Atualizar"/>
        </form>
        <br/><br/>
        <table border = "1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Idade</td>
                <td>Ações</td>
            </tr>
            <?php
                include 'conecta.php';
                $pesquisa = mysqli_query($conn,"SELECT * FROM usuario");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0){
                    while($usuario = $pesquisa -> fetch_array()){
                        $id = $usuario['id'];
                    print "<tr><td>".$usuario['id']."</td><td>".$usuario['nome']."</td><td>".$usuario['idade']."</td><td><a href='editar.php?id=$id'>Editar | <a href='excluir.php?id=$id'>Excluir</td></tr>";
                    }
                    mysqli_close($conn);
                }else{
                    print "Não a usuários para listar!";
                    mysqli_close($conn);
                }
                ?>
        </table>
        </center>
    </body>
</html>
