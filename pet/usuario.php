<?php
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION["user"]))
    {
        session_destroy();
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Pet Shop DogCat</title>
</head>
<body>
    <center><h2>Pet Shop DogCat</h2></center>
    <hr/>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
            include("menu.php");
        ?>
        </ul>&nbsp;
        <span calss="navbar-text">
        <?php
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='gray' class='bi bi-person-square' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
            </svg>&nbsp;Olá, ".$_SESSION["user"]."&nbsp;";
            echo "<a href='sair.php' style='color: gray; text-decoration: none; font-weight: bold;'>Sair&nbsp;&nbsp;&nbsp;</a>";
        ?>
        </span>
    </nav>
    <br/>
    <br/>
    <div class="row row-cols-1 row-cols-md-2 mb-2 position-relative">
        <div class="col position-absolute top-50 start-50 translate-middle-x">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>&nbsp;&nbsp;<b>Usuários</b></h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Adicionar usuário</button>
                    <br/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Login</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'conecta.php';
                            $query = mysqli_query($con, "SELECT * FROM usuario");
                            if($query->num_rows > 0)
                            {
                                while($usuario = $query->fetch_array())
                                {
                                    $id = $usuario['id'];
                                    $tipo = $usuario['tipo'];
                                    echo '<tr>';
                                    echo '<th scope="row">'.$usuario['id'].'</th>';
                                    echo '<td>'.$usuario['login'].'</td>';
                                    if($tipo == 1)
                                    {
                                        echo '<td>Administrador</td>';
                                    }
                                    else 
                                    {
                                        echo '<td>Normal</td>';
                                    }
                                    echo '<td><a href="#?id='.$id.'" data-bs-toggle="modal" data-bs-target="#editaUsuario'.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg></a> | <a href="excluir_usuario.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg></i></a></td>';
                        ?>
                        <div class="modal fade" id="editaUsuario<?php echo $id; ?>" tabindex="0" aria-labelledby="editaUsuario" aria-hidden="true" data-bs-backdrop="false">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editaUsuario">Edição de Usuários</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                            include 'conecta.php';
                                            $query2 = mysqli_query($con, "SELECT * FROM usuario WHERE id=$id");
                                            if($query2->num_rows > 0)
                                            {
                                                while($usuario2 = $query2->fetch_array())
                                                {
                                                    $id = $usuario2['id'];
                                                    $tipo = $usuario2['tipo'];
                                                    $login = $usuario2['login'];
                                                    $senha = $usuario2['senha'];
                                                }
                                            }
                                        ?>
                                        <form action="atualiza_usuario.php?id=<?php echo $id; ?>" method="post">
                                            <label><b>Login</b></label> 
                                            <input type="text" name="login" value="<?php echo $login; ?>" maxlength="30" required="required" autofocus class="form-control border-color:gray" />
                                            <br/>
                                            <label><b>Senha</b></label> 
                                            <input type="password" name="senha" value="<?php echo $senha; ?>" maxlength="30"  required="required" class="form-control" />
                                            <br/>
                                            <label><b>Administrador</b></label>
                                            <br/>
                                            <?php 
                                                if($tipo == 1)
                                                {
                                                    echo '<input class="form-check-input" type="checkbox" value="1" name="tipo" checked/>';
                                                }
                                                else
                                                {
                                                    echo '<input class="form-check-input" type="checkbox" value="1" name="tipo"/>';
                                                }
                                            ?>
                                            <br/>
                                            <br/>
                                            <input type="submit" value="Atualizar" class="btn btn-outline-secondary" />
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            echo '</tr>';
                            }
                        }
                        mysqli_close($con);
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuários</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="cadastra_usuario.php" method="post">
                                <label><b>Login</b></label> 
                                <input type="text" name="login" placeholder="Digite o seu login" maxlength="30" required="required" autofocus class="form-control border-color:gray" />
                                <br/>
                                <label><b>Senha</b></label> 
                                <input type="password" name="senha" placeholder="Digite a sua senha" maxlength="30"  required="required" class="form-control" />
                                <br/>
                                <label><b>Administrador</b></label>
                                <br/> 
                                <input class="form-check-input" type="checkbox" value="1" name="tipo"/>
                                <br/>
                                <br/>
                                <input type="submit" value="Cadastrar" class="btn btn-outline-secondary" />
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>