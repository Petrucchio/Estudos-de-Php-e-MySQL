<?php
    include_once "Connection.php";

    $con = Connection::getConn();

    $sql = "DELETE FROM `equipamento` WHERE `equipamento`.`id` = :id";
    $sql = $con->prepare($sql);

    $sql->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $res = $sql->execute();
    //echo $sql->debugDumpParams();

    header("Location: index.php?sucesso=true");
 ?>
