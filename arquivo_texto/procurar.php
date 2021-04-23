<?php
$arquivo = fopen('produtos.txt',"r");
$consulta = "/^".$_POST["codigo"]."/";
if($consulta == "/^/"){
    echo "você digitou nada";
}else{
while (!feof ($arquivo)) {  
  $nome = fgets($arquivo, 4096);
  if(preg_match($consulta, $nome)){
    echo $nome."<br>";
  }else{

  }
}
}

fclose ($arquivo);
?>
<html lang="Pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="name" content="Victor josé e Victor Louhan">
        <link rel="stylesheet" type="text/css" href="formato.css">
        </head>
        <body>
        <element id="titulo">
                    <ol>
            <a href="menu.html">retornar ao menu</a>
                    </ol>
        </element>
        </body>
</html>



    



   

