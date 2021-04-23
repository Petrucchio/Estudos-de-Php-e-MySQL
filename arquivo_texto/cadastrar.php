<?php
$arquivo = fopen('produtos.txt','a+',0);
if ($arquivo == false){ die('Não foi possível criar o arquivo.');
}else if($arquivo == true){
    session_start();
$codigo = isset($_POST["codigo_produto"]) ? addslashes(trim($_POST["codigo_produto"])) : FALSE;
$descricao = isset($_POST["descricao_produto"]) ? addslashes(trim($_POST["descricao_produto"])) : FALSE;
$preco = isset($_POST["preco_produto"]) ? addslashes(trim($_POST["preco_produto"])) : FALSE;
$quantidade = isset($_POST["quantidade_produto"]) ? addslashes(trim($_POST["quantidade_produto"])) : FALSE;
$dados = $codigo." ".$descricao." ".$preco." ".$quantidade."\n";

fwrite($arquivo, $dados );
//Fechamos o arquivo após escrever nele
fclose($arquivo);
    header('Location: menu.html');
    exit();
}else{
    header('Location: menu.html');
    die();
}

?>
