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
    <div class="container padding-left: ($spacer * .5)">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Agenda Atual</h4>
          </div>
          <div class="card-body">
            Conteúdo
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary">Ver Agenda</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Mês</h4>
          </div>
          <div class="card-body">
            Conteúdo
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pet Geral</h4>
          </div>
          <div class="card-body">
           Conteúdo
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary">Visão Geral da Pet</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <footer>
        <hr/>
        <center>
            <h6>Desenvolvido por: XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6>
            <h7>SENAI - CTM - MARINGÁ - 2022</h7>
        </center>
    </footer>
</body>
</html>