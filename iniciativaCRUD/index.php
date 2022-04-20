<html>
    <body>
    <center>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilo.css" rel="stylesheet"/>
    </head>
    <div class="p-3 mb-2 bg-dark text-white">
        <h2>Iniciativa C.R.U.D.</h2>
    </div>
    <hr/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-success text-white" class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>CADASTRO DE VEÍCULO</b></h4>
                </div>
                    <div class="card-body">
                        <form action = "index.php" method = "POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><h5>Veículo</h5></span>
                                <input type="text" name = "carro" class="form-control" placeholder="digite aqui....">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><h5>Placa</h5></span>
                                <input type="text" name = "placa" class="form-control" placeholder="digite aqui....">
                                <span class="input-group-text"><h5>Horário</h5></span>
                                <select class="form-select" name="h">
                                    <option value="h0" selected>07</option>
                                    <option value="h1">08</option>
                                    <option value="h2">09</option>
                                    <option value="h3">10</option>
                                    <option value="h4">11</option>
                                    <option value="h5">12</option>
                                    <option value="h6">13</option>
                                    <option value="h7">14</option>
                                    <option value="h8">15</option>
                                    <option value="h9">16</option>
                                    <option value="h10">17</option>
                                    <option value="h11">18</option>
                                </select>
                                <select class="form-select" name="m">
                                    <option value="m0" selected>00</option>
                                    <option value="m1">05</option>
                                    <option value="m2">10</option>
                                    <option value="m3">15</option>
                                    <option value="m4">20</option>
                                    <option value="m5">25</option>
                                    <option value="m6">30</option>
                                    <option value="m7">35</option>
                                    <option value="m8">40</h5></option>
                                    <option value="m9">45</h5></option>
                                    <option value="m10">50</option>
                                    <option value="m11">55</option>
                                </select>
                            </div>
                            <br/><button type = "submit" name = "gravar" class="btn btn-success btn-lg">GRAVAR</button>
                        </form>                        
                        <?php
                        if (isset($_POST['gravar'])) {
                            $carro = $_POST['carro'];
                            $placa = $_POST['placa'];
                            $entradamin=$_POST['m'];
                            $entradahour=$_POST['h'];
                            $arraymin=["m0" => 0,"m1" => 5,"m2" => 10,"m3" => 15,"m4" => 20,"m5" => 25,"m6" => 30,"m7" => 35,"m8" => 40,"m9" => 45,"m10" => 50,"m11" => 55];
                            $arrayhour=["h0" => 7, "h1" => 8,"h2" => 9, "h3" => 10, "h4" => 11, "h5" => 12, "h6" => 13, "h7" => 14, "h8" => 15, "h9" => 16, "h10" => 17, "h11" => 18];
                            $arquivo = 'dados.txt';
                            $texto = $carro . ";" . $placa . ";" . $arrayhour[$entradahour].";".$arraymin[$entradamin]. ";";
                            $file = fopen($arquivo, 'a');
                            fwrite($file, $texto);
                            fclose($file);
                        } else {
                            print "";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-secondary text-white" class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>&nbsp;&nbsp;<b>Dados:</b></h4>
                </div>
                    <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Modelo do veículo</th>
                            <th scope="col">Placa do veículo</th>
                            <th scope="col">Horário de entrada</th>
                            <th scope="col">Pagar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $arquivo = fopen("dados.txt", "r");
                            while (!feof($arquivo)) {
                                $linha = fgets($arquivo);
                            }
                            $dados = explode(";", $linha);
                            fclose($arquivo);
                            print '<br/><br/>';
                            $conta = count($dados) - 2;
                            $print = [0 => "00",5 => "05",7 => "07",8 => "08",9 => "09",];
                            for ($i = 0; $i <= $conta; $i++) {
                                $posicao = $i;
                                print '<tr>';
                                print '<td>' . $dados[$i] . '</td>';
                                $i++;
                                print '<td>'.$dados[$i] . '</td>';
                                $i++;
                                if($dados[$i] == 7 || $dados[$i] == 8 || $dados[$i] == 9){
                                    $search = array_search($dados[$i], $print);
                                    print '<td>'.$print[$search] . ' : ';
                                }else{
                                    print '<td>'.$dados[$i] . ' : ';
                                }
                                $i++;
                                if($dados[$i] == 0 || $dados[$i]== 5){
                                    $search = array_search($dados[$i], $print);
                                    print $print[$search] . '</td>';
                                }else{
                                    print $dados[$i] . '</td>';
                                }
                                print '<td>&nbsp;&nbsp;&nbsp;<a href ="pagar.php?pos='.$posicao.'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-cash-stack" viewBox="0 0 16 16">
                              <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                              <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
                            </svg></a></td>';
                                print '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
            <div class="p-3 mb-2 bg-success text-white" class="col">
                <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Tabela de preço:</b></h4>
                    </div>
                        <div class="card-body">
                            <form action = "p.php" method = "POST">
                                <div class="input-group mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col"><h4>Até 1 hora</h4></th>
                                        <th scope="col"><h4>Até 2 horas</h4></th>
                                        <th scope="col"><h4>Até 3 horas</h4></th>
                                        <th scope="col"><h4>Por hora excendente</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><h5>R$ 12,00</h5></td>
                                        <td><h5>+ R$ 9,00</h5></td>
                                        <td><h5>+ R$ 8,50</td>
                                        <td><h5>+ R$ 7,50</h5></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <span class="input-group-text" position = "center">15min de tolerância</span>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['confirm'])){
                                header("location: index.php");
                            }else{
                                print"";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </center>
    </body>
</html>