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
        <center><a href = "index.php">Voltar</a><br/><br/><br/><br/></center>
        <form action = 'cadastro.php' method = 'POST'>
        <center>
            Nome<br/>
            <input  type = "text" name = "nome" required/><br/><br/>
            Celular<br/>
            <input type = "text" name = "celular" required/><br/><br/>
            <input type = "submit" value = "Cadastrar"/><br/>
        </center>
        </form>
        <br/><br/>
    </body>
</html>