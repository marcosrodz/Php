<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilo.css" rel="stylesheet"/>
    </head>
    <body>
    <?php
        $pos = $_GET['pos'];
        $pos2 = $pos + 1;
        $pos3 = $pos + 2;
        $pos4 = $pos + 3;
        $arquivo = fopen("dados.txt","r");
        while(!feof($arquivo)){
        $linha = fgets($arquivo);
        }
        $dados = explode(";",$linha);
        fclose($arquivo);
        print_r($dados);

        ?>
    <center>
    <div class="p-3 mb-2 bg-dark text-white">
        <h2>Iniciativa C.R.U.D.</h2>
    </div>
    <hr/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>CADASTRO DE VEÍCULO</b></h4>
                </div>
                    <div class="card-body">
                        <center>
                        <form action = "pagar.php" method = "POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><h5><?php echo $dados[$pos];?></h5></span>
                                <span class="input-group-text"><h5><?php echo $dados[$pos2];?></h5></span>
                                <span class="input-group-text"><h5><?php echo $dados[$pos3].' : '.$dados[$pos4];?></h5></span></h5></span>
                                <span class="input-group-text"><h5> | </h5></span>
                                <span class="input-group-text"><h5>Horário de saída</h5></span>
                                <select name="h">
                                    <option value="h0" selected>08</option>
                                    <option value="h1">09</option>
                                    <option value="h2">10</option>
                                    <option value="h3">11</option>
                                    <option value="h4">13</option>
                                    <option value="h5">14</option>
                                    <option value="h6">15</option>
                                     <option value="h7">16</option>
                                    <option value="h8">17</option>
                                </select>
                                <select name="m">
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
                            <br/><button type = "submit" name = "calcular" class="btn btn-primary btn-lg">calcular</button>
                        </form>     
                        </center>                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['calcular'])){
            $saidamin=$_POST['m'];
            $saidahour=$_POST['h'];
            $totalentrada = ($pos3*60)+$pos4;
            $arraymin=["m0" => 0,"m1" => 5,"m2" => 10,"m3" => 15,"m4" => 20,"m5" => 25,"m6" => 30,"m7" => 35,"m8" => 40,"m9" => 45,"m10" => 50,"m11" => 55];
            $arrayhour=["h0" => 8,"h1" => 9, "h2" => 10, "h3" => 11, "h4" => 12, "h5" => 13, "h6" => 14, "h7" => 15, "h8" => 16, "h9" => 17];
            $totalsaida = ($arrayhour[$saidahour]*60) + $arraymin[$saidamin];
            $totalmin = $totalsaida - $totalentrada;
            $valor=0;
            print $totalmin.'<br/>';
            if($totalmin <= 60){
                $valor += 12;
            }elseif($totalmin <= 120 && $totalmin > 60){
                $valor += 21;
            }elseif($totalmin <= 180 && $totalmin > 120){
                $valor += 29.5;
            }elseif($totalmin <= 240 && $totalmin > 180){
                $valor += 37;
            }elseif($totalmin <= 300 && $totalmin > 240){
                $valor += 44.5;
            }elseif($totalmin <= 360 && $totalmin > 300){
                $valor += 52;
            }elseif($totalmin <= 420 && $totalmin > 360){
                $valor += 59.5;
            }elseif($totalmin <= 480 && $totalmin > 420){
                $valor += 67;
            }elseif($totalmin <= 540 && $totalmin > 480){
                $valor += 74.5;
            }
            print $valor;
        }else{
            echo"";
        }
    ?>
    </center>
    </body>
    <hr/>
</html>