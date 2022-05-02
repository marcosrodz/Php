
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
    fclose($arquivo);
    print_r($dados);
    $texto = $dados[$pos] . ";" . $dados[$pos2] . ";" . $dados[$pos3] . ";" . $dados[$pos4] . ";";
    $arq = 'relatorio.txt';
    $fil = fopen($arq, 'a');
    fwrite($fil, $texto);
    fclose($fil);
    unset($dados[$pos]);
    unset($dados[$pos2]);
    unset($dados[$pos3]);
    unset($dados[$pos4]);
    $array = array_filter($dados);
    print "<br/>";
    print_r($dados);
    $file = 'dados.txt';
    unlink($file);
    $arqDados = fopen("dados.txt", "w");
    if($arqDados == false) die ('Não foi possível criar p arquivo');
    foreach($array as $item){
        $arquivo = "dados.txt";
        $text = $item.";";
        $file = fopen($arquivo, "a");
        fwrite($file, $text);
    }
    fclose($arqDados);
    header("location: paga.php");
?>