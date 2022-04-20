
<?php
    $pos = $_GET['pos'];
    print $pos;
    $pos2 = $pos + 1;
    $pos3 = $pos + 2;
    $pos4 = $pos + 3;
    $arquivo = fopen("dados.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }  
    $dados = explode(";",$linha);
    print_r($dados);
    $arquivo1 = 'relatorio.txt';
    $texto1 = $dados[$pos] . ";" . $dados[$pos2] . ";" . $dados[$pos3].";" . $dados[$pos4] . ";";
    $file1 = fopen($arquivo1, 'a');
    fwrite($file1, $texto1);
    fclose($arquivo);
    fclose($file1);
    unset($dados[$pos]);
    unset($dados[$pos2]);
    unset($dados[$pos3]);
    unset($dados[$pos4]);
    $array = array_filter($dados);


    // print "<br/>";
    // print_r($array);
    // print "<br/>";

    $file = 'dados.txt';
    unlink($file);
    $arq = fopen("dados.txt", "w");
    if($arq == false) die ('Não foi possível criar p arquivo');
    foreach($array as $item){
        $arquivo = "dados.txt";
        $texto = $item.";";
        $file = fopen($arquivo, "a");
        fwrite($file, $texto);
    }
    // print_r($array);
    fclose($arq);
    header("location: paga.php");
?>
