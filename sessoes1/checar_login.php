<?php
$_SESSION['logged'] = 0 ;
session_start(); //inicia a sessão
$l="teste";
$s="e7d80ffeefa212b7c5c55700e4f7193e";
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; //recebe o login
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; //recebe a senha criptografada em md5
if(!$login || !$senha) //verifica se as caixas de login e senha estão vazias
{
	echo "Você deve digitar sua senha e login!";
	exit;
}

if($login == $l && $senha == $s ) {//verifica as senhas
    $_SESSION['login'] = $log;
    $_SESSION['senha'] = $sen;
    $_SESSION['logged'] = 1;

    header('Location: principal.php');
    exit();
}else{
    header('location: formulario.html');
    die();
}
?>