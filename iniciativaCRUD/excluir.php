<?php
    $posicao = $_GET['pos'];
    $posicao2 = $posicao + 1;
    $posicao3 = $posicao2 + 1;

    $arquivo = fopen("dados.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";", $linha);
    fclose($arquivo);
    unset($dados[$posicao]);
    unset($dados[$posicao2]);
    unset($dados[$posicao3]);
    $array = array_filter($dados);
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
    fclose($arq);
    header("location: index.php");
?>