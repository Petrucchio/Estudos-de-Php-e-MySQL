
<?php

$logged = 1;

if(!$logged){
    echo"REDIRECT";
    header('Location: formulario.html');
    exit();
}

?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="name" content="Victor José e Victor louhan">
        <style>
            #titulo{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
            }
        </style>
    </head>

    <body>
    <p> <h1 element id="titulo">Bem-Vindo ao Sistema </h1></p>
    </body>
</html>
    

