<?php
    include_once "Connection.php";

    $con = Connection::getConn();

    $sql = "UPDATE `equipamento` SET `nf` = :nf, `valor` = :valor WHERE `equipamento`.`id` = :id";
    $sql = $con->prepare($sql);

    $sql->bindValue(':nf', $_POST['nf']);
    $sql->bindValue(':valor', $_POST['valor'], PDO::PARAM_INT);
    $sql->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $res = $sql->execute();
    //echo $sql->debugDumpParams();

    header("Location: index.php?sucesso=true");
 ?>
