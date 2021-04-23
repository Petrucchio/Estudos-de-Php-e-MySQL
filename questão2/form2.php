<!doctype html>
<html>
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
    </head>
    <center>
    <h1> Valor calculado </h1>
        <?php
        
       $opcao = $_POST['opera'] = isset($_POST['opera']) ? $_POST['opera'] : null;
        
       
        $cliente = $_POST['opera'];
        $resultado = 0;

        if($cliente=="soma"){
            $resultado=($_POST['numero1'])+($_POST['numero2']);
            echo $resultado;
        }elseif($cliente=="subtrair"){
            $resultado=($_POST['numero1'])-($_POST['numero2']);
            echo $resultado;
        }elseif($cliente=="multiplicar"){
            $resultado=($_POST['numero1'])*($_POST['numero2']);
            echo $resultado;
        }elseif($cliente=="dividir"){
            $resultado=($_POST['numero1'])/($_POST['numero2']);
            echo $resultado;
        }
        
        ?>
        </center>
            
           
    
    <body> 
    
    </body>
</html>


</:doctype>
