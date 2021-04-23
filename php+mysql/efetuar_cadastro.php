<?php
    include_once "Connection.php";

    $con = Connection::getConn();

    $sql = "INSERT INTO equipamento (nome, nf, valor, categoria) VALUES (:nome, :nf, :valor, :categoria)";
    $sql = $con->prepare($sql);

    $sql->bindValue(':nome', $_POST['Cliente']);
    $sql->bindValue(':nf', $_POST['Nota']);
    $sql->bindValue(':valor', $_POST['Valor'], PDO::PARAM_INT);
    $sql->bindValue(':categoria', $_POST['Categoria'], PDO::PARAM_INT);
    $res = $sql->execute();
    //echo $sql->debugDumpParams();

    header("Location: index.php?sucesso=true");
 ?>