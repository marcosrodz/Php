<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilo.css" rel="stylesheet"/>
    </head>
    <body>
    <?php
        $arquivo = fopen("relatorio.txt","r");
        while(!feof($arquivo)){
            $linha = fgets($arquivo);
        }  
        $dados = explode(";",$linha);
        fclose($arquivo);
        print_r($dados);
        $p =  count($dados)-5;
        $p1 = $p + 1;
        $p2 = $p + 2;
        $p3 = $p + 3;
        $tique = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    ?>
    <center>
    <div class="p-3 mb-2 bg-dark text-white">
        <h2>Iniciativa C.R.U.D.</h2>
    </div>
    <hr/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-success text-white"class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>CALCULO DO VALOR FINAL</b></h4>
                </div>
                    <div class="card-body">
                        <form action = "paga.php" method = "POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><h5>Defina o horario de saida: </h5></span>
                                <select class="form-select" name="h">
                                    <option value="h0" selected>08</option>
                                    <option value="h1">09</option>
                                    <option value="h2">10</option>
                                    <option value="h3">11</option>
                                    <option value="h4">12</option>
                                    <option value="h5">13</option>
                                    <option value="h6">14</option>
                                    <option value="h7">15</option>
                                    <option value="h8">16</option>
                                    <option value="h9">17</option>
                                </select>
                                <select class="form-select"name="m">
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
                            <br/><button type = "submit" name = "calcular" class="btn btn-success btn-lg">Calcular</button>
                        </form>
                        <?php
                            if(isset($_POST['calcular'])){
                                $h = $_POST['h'];
                                $m = $_POST['m'];
                                $arraymin=["m0" => 0,"m1" => 5,"m2" => 10,"m3" => 15,"m4" => 20,"m5" => 25,"m6" => 30,"m7" => 35,"m8" => 40,"m9" => 45,"m10" => 50,"m11" => 55];
                                $arrayhour=["h" => 7, "h0" => 8,"h1" => 9, "h2" => 10, "h3" => 11, "h4" => 12, "h5" => 13, "h6" => 14, "h7" => 15, "h8" => 16, "h9" => 17, "h10" => 18];
                                $arquivo1 = 'relatorio.txt';
                                $texto1 = $arrayhour[$h].";" . $arraymin[$m] . ";";
                                $file1 = fopen($arquivo1, 'a');
                                fwrite($file1, $texto1);
                                fclose($file1);
                                header("location: p.php");
                            }else{
                                print"";
                            }
                        ?>
                    </div>
            </div>
        </div>
    </div>
    </center>
    </body>
    <hr/>
</html>