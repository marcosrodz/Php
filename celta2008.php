<html>
    <body>
        <h2>Média de combustível</h2>
        <hr/>
        <form action="celta2008.php" method="POST">
            <label>KM</label><br/>
            <input type="text" name="KM"/><br/>
            <label>litros</label><br/>
            <input type="text" name="litros"/><br/><br/>
            <input type="submit" value= "Resultado"/>
            
        </form>
<?php
    if(isset($_POST['KM'])){
        $a = $_POST['KM'];
        $b = $_POST['litros'];
        $resultado = ($a / $b);
        echo "O Resultado Foi: ".$resultado;
    }else {
        echo"";
    }
?>
    </body>
    <hr/>
</html>

<html>
    <body>
        <h2>Conversor térmico</h2>
        <hr/>
        <form action="celta2008.php" method="POST">
            <label>Graus em fahrenheit</label><br/>
            <input type="text" name="of"/><br/>
            <input type="submit" value= "Resultado"/>
        </form>
    <?php
        if(isset($_POST['of'])){
            $a = $_POST['of'];
            $b = (5*($a-32)/9);
            echo "O Resultado Foi: ".$b;
        }else {
            echo"";
        }
    ?>
    </body>
    <hr/>
</html>

<html>
    <body>
        <h2>Determine par e impar</h2>
        <hr/>
        <form action="celta2008.php" method="POST">
            <label>Digite um número: </label><br/>
            <input type="number" name="number"/><br/>
            <input type="submit" value= "Resultado"/>
        </form>
    <?php
        if(isset($_POST['number'])){
            $a = $_POST['number'];
            if($a % 2 == 0)
            echo "$a é par";
            else
           echo "$a é ímpar";
        }else {
            echo"";
        }
    ?>
    </body>
    <hr/>
</html>

<html>
    <body>
        <h2>Ajuste Salárial</h2>
        <hr/>
        <form action="celta2008.php" method="POST">
            <label>Digite seu salaŕio: </label><br/>
            <input type="number" name="salario"/><br/>
            <input type="submit" value= "Verificar aumento"/>
        </form>
    <?php
        echo "</br>";
        if(isset($_POST['salario'])){
            $salario = $_POST['salario'];
            $porcento = ['percentual'];
            if($salario <= 280){
                $porcento = 20;
            }elseif($salario <= 700){
                $porcento = 15;
            }elseif($salario <= 1500){
                $porcento = 10;
            }if($porcento = 5);
                echo "Salário atual: ", $salario;
                echo "</br>";
                echo "Percentual: ", $porcento,"%";
                echo "</br>";
                    $porcento = $porcento / 100.0;
                    $aumento = $porcento * $salario;
                    $novosalario = $aumento + $salario;
                echo "Seu aumento é de: R$", $aumento;
                echo "</br>";
                echo "Seu novo salário é: R$",$novosalario;
                echo"<hr>";
        }else{
            echo"";
        }
    ?>
    </body>
    <hr/>
</html>

<html>
    <body>
        <h2>Média de Notas</h2>
        <hr/>
        <form action="celta2008.php" method="POST">
            <label>Digite sua primeira nota: </label><br/>
            <input type="number" name="valor1"/><br/>
            <label>Digite sua segunda nota: </label><br/>
            <input type="number" name="valor2"/><br/><br/>
            <input type="submit" value= "Analizar"/>
        
<?php
    if(isset($_POST['valor1'])){
        $nota1 = $_POST['valor1'];
        $nota2 = $_POST['valor2'];
        $media = ($nota1 + $nota2) / 2;
        $conceito=array("A", "B", "C", "D", "E");
        $resultado=array('Aprovado', 'Reprovado');
            if($media >= 90){
                $conceito = "A";
            }elseif($media >= 75){
                $conceito = "B";
            }elseif($media >= 60){
                $conceito = "C";
            }elseif($media >= 40){
                $conceito = "D";
            }elseif($media = 0){
                $conceito = "E";
            }if($conceito == "A" or $conceito == "B" or $conceito == "C"){
                $resultado = "Aprovado";
            }elseif($conceito == "D" or $conceito == "E"){
                $resultado = "Reprovado";
            }
        echo "</br>";
        echo "Sua média geral é de: ".$media;
        echo "</br>";
        echo "Seu conceito é: ".$conceito;
        echo "</br>";
        echo "Isso quer dizer que vocẽ foi: ".$resultado;
        echo "<hr>";
    }else {
        echo"";
    }
?>
        </form>
    </body>
    <hr/>
</html>