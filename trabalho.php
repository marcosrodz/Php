<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <center><h2>Exercicio 1<h2><hr/></center>
        <?php
            $a = [];
            for($i = 1;$i <= 10;$i++){
                $number = rand(1,10);
                array_push($a, $number);
            }
            $b = [];
            for($j = 1;$j <= 10;$j++){
                $numero = rand(1,10);
                array_push($b, $numero);
            }
            print_r($a);
            print '<br/>';
            print_r($b);
            $c = [];
            for($k = 0;$k <= 9;$k++){
                $c [] = ($a[$k] + $b[$k]);
            }
            print '<br/>Array de soma:<br/>';
            print_r($c);
        ?>
        <center><hr/><h2>Exercicio 2<h2><hr/></center>
        <?php
            $a = [];
            for($i = 1;$i <= 5;$i++){
                $numeral = rand(1,10);
                array_push($a, $numeral);
            }
            foreach($a as $value){
                echo $value.' ';
            }
            print '<br/>';
            sort($a);
            for($j = 1;$j <= 4; $j++){
                array_pop($a);   
            }
            print_r($a);
        ?>
        <center><br/><hr/><h2>Exercicio 3<h2><hr/></center>
        <?php
            ini_set('display_errors', 0 );
            error_reporting(0);
            $alunos = ["Marcos",90,70,"Caio",60,80,"Lucas",70,50];
            $quant = count($alunos)-1;
            $resultado = ["APROVADO!","REPROVADO!"];
            $alunosf2 = [];
            for($i = 0; $i <= $quant; $i++){
                $media = ($alunos[1] + 2*$alunos[2]) / 3;
                $media = round($media, 2);
                array_push($alunosf2, $alunos[0]);
                array_push($alunosf2, $media);
                array_shift($alunos);
                array_shift($alunos);
                array_shift($alunos);
            }
            if($alunosf2[1] >= 70){
                $resultado = "APROVADO!";
            }else{
                $resultado = "REPROVADO!";
            }
            print 'O aluno '.$alunosf2[0].' alcançou a média de '.$alunosf2[1].' pontos. Logo o mesmo foi: '.$resultado.'<br/>';

            if($alunosf2[3] >= 70){
                $resultado = "APROVADO!";
            }else{
                $resultado = "REPROVADO!";
            }
            print 'O aluno '.$alunosf2[2].' alcançou a média de '.$alunosf2[3].' pontos. Logo o mesmo foi: '.$resultado.'<br/>';

            if($alunosf2[5] >= 70){
                $resultado = "APROVADO!";
            }else{
                $resultado = "REPROVADO!";
            }
            
            print 'O aluno '.$alunosf2[4].' alcançou a média de '.$alunosf2[5].' pontos. Logo o mesmo foi: '.$resultado.'<br/>';

        ?>
        <center><br/><hr/><h2>Exercicio 4<h2><hr/></center>
        <?php
            ini_set('display_errors', 0 );
            error_reporting(0);
            $alunos = ["Ana",70,"David",85,"Mathues",67,"Nicolas",48,"Caio",93,"Isabela",74,"Clara",98,"Lais",79,"Felipe",87,"José",33];
            $notas = [];
            $quant = count($alunos);
            for($i=1; $i<=$quant; $i=$i+2){
                array_push($notas, $alunos[$i]);
            }
            for($j = 0; $j <= ($quant / 2); $j++){
                $soma += $notas[$j];
            }
            $media = $soma / ($quant / 2);
            $maiornota = max($notas);
            $maiornotaname = array_search($maiornota, $notas)*2;
            print "A classe teve uma média coletiva de ".$media.". Entre todos quem obteve a maior nota foi o(a) ".$alunos[$maiornotaname]." com ".$maiornota." pontos.";
        ?>
        <center><br/><hr/><h2>Exercicio 5<h2><hr/></center>
        <?php
            $cad1 = ["nome" => "Ana","cidade" => "São Paulo","idade" => 22,"sexo" => "Feminino"];
            $cad2 = ["nome" => "David","cidade" => "Curitiba","idade" => 26,"sexo" => "Masculino"];
            $cad3 = ["nome" => "Matheus","cidade" => "Porto Alegre","idade" => 19,"sexo" => "Masculino"];
            $cad4 = ["nome" => "Nicolas","cidade" => "Santos","idade" => 17,"sexo" => "Masculino"];
            $cad5 = ["nome" => "José","cidade" => "São Paulo","idade" => 28,"sexo" => "Masculino"];
            $cad6 = ["nome" => "Caio","cidade" => "Salvador","idade" => 20,"sexo" => "Masculino"];
            $cad7 = ["nome" => "Isabela","cidade" => "Curitiba","idade" => 18,"sexo" => "Feminino"];
            $cad8 = ["nome" => "Clara","cidade" => "Rio de Janeiro","idade" => 15,"sexo" => "Feminino"];
            $cad9 = ["nome" => "Lais","cidade" => "Santos","idade" => 24,"sexo" => "Feminino"];
            $cad10 = ["nome" => "Felipe","cidade" => "Rio de Janeiro","idade" => 21,"sexo" => "Masculino"];

            $nomes = [];
            array_push($nomes, $cad1["nome"]);
            array_push($nomes, $cad2["nome"]);
            array_push($nomes, $cad3["nome"]);
            array_push($nomes, $cad4["nome"]);
            array_push($nomes, $cad5["nome"]);
            array_push($nomes, $cad6["nome"]);
            array_push($nomes, $cad7["nome"]);
            array_push($nomes, $cad8["nome"]);
            array_push($nomes, $cad9["nome"]);
            array_push($nomes, $cad10["nome"]);
            $cidade = [];
            array_push($cidade, $cad1["cidade"]);
            array_push($cidade, $cad2["cidade"]);
            array_push($cidade, $cad3["cidade"]);
            array_push($cidade, $cad4["cidade"]);
            array_push($cidade, $cad5["cidade"]);
            array_push($cidade, $cad6["cidade"]);
            array_push($cidade, $cad7["cidade"]);
            array_push($cidade, $cad8["cidade"]);
            array_push($cidade, $cad9["cidade"]);
            array_push($cidade, $cad10["cidade"]);
            $idade = [];
            array_push($idade, $cad1["idade"]);
            array_push($idade, $cad2["idade"]);
            array_push($idade, $cad3["idade"]);
            array_push($idade, $cad4["idade"]);
            array_push($idade, $cad5["idade"]);
            array_push($idade, $cad6["idade"]);
            array_push($idade, $cad7["idade"]);
            array_push($idade, $cad8["idade"]);
            array_push($idade, $cad9["idade"]);
            array_push($idade, $cad10["idade"]);
            $sexo = [];
            array_push($sexo, $cad1["sexo"]);
            array_push($sexo, $cad2["sexo"]);
            array_push($sexo, $cad3["sexo"]);
            array_push($sexo, $cad4["sexo"]);
            array_push($sexo, $cad5["sexo"]);
            array_push($sexo, $cad6["sexo"]);
            array_push($sexo, $cad7["sexo"]);
            array_push($sexo, $cad8["sexo"]);
            array_push($sexo, $cad9["sexo"]);
            array_push($sexo, $cad10["sexo"]);

            print "Cadastros: ";
            for($i = 0; $i <= 9; $i++){
                print $nomes[$i].", ".$idade[$i]." anos. ";
            }
            $santos = array_search("Santos", $cidade);

            print "<br/><br/>Residem em Santos: ";
            for($l = 0; $l <= 9; $l++){
                if($cidade[$l] != "Santos"){
                    print "";
                }else{
                    print $nomes[$l].', ';
                }
            }

            print "<br/><br/>Maiores de 18: ";
            for($j = 0; $j <= 9; $j++){
                if($idade[$j] >= 18){
                    print $nomes[$j].', ';
                }
            }

            print "<br/><br/> Sexo masculino: ";
            for($k = 0; $k <= 9; $k++){
                if($sexo[$k] != "Masculino"){
                    print "";
                }else{
                    print $nomes[$k].', ';
                }
            }
            print"<br/><br/><br/><br/>";
        ?>
    <body>
</html