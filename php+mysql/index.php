<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>PHP e MYSQL</title>

    <style>
    #titulo {
        display: inline-block;
        background-color: white;
        border-radius: 5px;
        border: 1px solid #c4c4c4;
        width: 150px;
        height: 25px;
        margin: 1px;
        margin-bottom: -5px;
        text-align: center;
        margin-left: 5px;
    }
    #titulo h1 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 8pt;
        font-weight: 500;
        text-align: center;
        margin-top: 4px;
    }
    .corpo-tela {
      background-color: rgb(42, 190, 235);
      width: 300px;
      border-radius: 5px;
      padding: 50px;
      margin: 20px;
      margin-top: 0;
    }
    align_right{
        text-align: right;
    }
    align_left{
        text-align: left;
    }
    p.groove {border-style: groove;}
    </style>
</head>
<body>
    <div id="titulo">
        <h1 class="groove">
            Tela Inicial
        </h1>
    </div>
    <div class="corpo-tela">
    <a href="cadastro.html"><center><p><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" ></p></center></a>
    <a href="exclusao.html"><center><p><input type="submit" value="excluir" id="excluir" name="excluir" ></p></center></a>
    <a href="alteracao.html"><center><p><input type="submit" value="alterar" id="alterar" name="alterar" ></p></center></a>
    <a href="lsitar.php"><center><p><input type="submit" value="listar" id="listar" name="listar" ></p></center></a>

</div>
</body>
<?php
if(isset($_GET['sucesso'])) if($_GET['sucesso'] == true) echo "Operação realizada com sucesso.";
 ?>
