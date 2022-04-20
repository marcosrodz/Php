<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilo.css" rel="stylesheet"/>
    <head>
    <body>
        <?php
            $arquivo = fopen("relatorio.txt","r");
            while(!feof($arquivo)){
                $linha = fgets($arquivo);
            }  
            $dados = explode(";",$linha);
            fclose($arquivo);
            $p5 = count($dados)-2;
            $p4 = $p5 - 1;
            $p3 =  $p5 - 2;
            $p2 =  $p5 - 3;
            $p1 =  $p5 - 4;
            $p =  $p5 - 5;
            $totalentrada = ($dados[$p2] * 60) + $dados[$p3];
            $totalsaida = ($dados[$p4]*60)+$dados[$p5];
            $totalmin = $totalsaida - $totalentrada;
            $valor = ["12,00","21,00","29,50","37,00","44,50","52,00","59,50","67,00","74,50","82,00","89,50"];
            if($totalmin <= 60){
                $valor = $valor[0];
            }
            if($totalmin <= 120 && $totalmin > 60){
                $valor = $valor[1];
            }
            if($totalmin <= 180 && $totalmin > 120){
                $valor = $valor[2];
            }
            if($totalmin <= 240 && $totalmin > 180){
                $valor = $valor[3];
            }
            if($totalmin <= 300 && $totalmin > 240){
                $valor = $valor[4];
            }
            if($totalmin <= 360 && $totalmin > 300){
                $valor = $valor[5];
            }
            if($totalmin <= 420 && $totalmin > 360){
                $valor = $valor[6];
            }
            if($totalmin <= 480 && $totalmin > 420){
                $valor = $valor[7];
            }
            if($totalmin <= 540 && $totalmin > 480){
                $valor = $valor[8];
            }
            if($totalmin <= 600 && $totalmin > 540){
                $valor = $valor[9];
            }
            if($totalmin <= 600 && $totalmin > 600){
                $valor = $valor[10];
            }
            $arq = 'relatorio.txt';
            $txt = $valor . ";";
            $file = fopen($arq, 'a');
            fwrite($file, $txt);
            fclose($file);
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
                        <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>TICKET</b></h4>
                    </div>
                        <div class="card-body">
                            <form action = "p.php" method = "POST">
                                <div class="input-group mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Modelo do veículo</th>
                                        <th scope="col">Placa do veículo</th>
                                        <th scope="col">Horário de entrada</th>
                                        <th scope="col">Horario de saida</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                            $print = [0 => "00",5 => "05",7 => "07",8 => "08",9 => "09",];
                                            print "<td><h5>" . $dados[$p] . "</h5></td>";
                                            print "<td><h5>" . $dados[$p1] . "</h5></td>";
                                            if($dados[$p2] == 7 || $dados[$p2] == 8 || $dados[$p2] == 9){
                                                $search = array_search($dados[$p2], $print);
                                                print "<td><h5>" . $print[$search] . " : ";
                                            }else{
                                                print "<td><h5>" . $dados[$p2] . " : ";
                                            }
                                            if($dados[$p3] == 0 || $dados[$p3] == 05){
                                                $search = array_search($dados[$p3], $print);
                                                print $print[$search] . "</h5></td>";
                                            }else{
                                                print $dados[$p3] . "</h5></td>";
                                            }           
                                            if($dados[$p4] == 7 || $dados[$p4] == 8 || $dados[$p4] == 9){
                                                $search = array_search($dados[$p4], $print);
                                                print "<td><h5>" . $print[$search] . " : ";
                                            }else{
                                                print "<td><h5>" . $dados[$p4] . " : ";
                                            }
                                            if($dados[$p5] == 0 || $dados[$p5] == 05){
                                                $search = array_search($dados[$p5], $print);
                                                print $print[$search] . "</h5></td>";
                                            }else{
                                                print $dados[$p5] . "</h5></td>";
                                            }                                       
                                        ?>
                                    </tr>
                                    </tbody>
                                </table>
                                <span class="input-group-text"><h4>Valor a ser pago: </h4></span>
                                <span class="input-group-text"><h4><?php print 'R$ '.$valor;?></h4></span>
                                </div>
                                <br/><br/><button type = "submit" name = "confirm" class="btn btn-success btn-lg">Confirmar pagamento</button>
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
        </center>
    </body>
</html>