<!doctype html>
<html lang"pt-br">
    
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
       
    </head>
  
    
    <body> 
        
        <center>
        <h1>Valor do apartamento</h1>
        <?php
        
       $opcao = $_POST['tipoanimal'] = isset($_POST['tipoanimal']) ? $_POST['tipoanimal'] : null;
        
       
        $cliente = $_POST['tipoanimal'];
        $resultado = 350;
            
            echo "proprietário:",$_POST['proprietario'],"<br/>";
            echo "apartamento:",$_POST['apartamento'],"<br/>";
            

        if($cliente=="cao"){
            $resultado+= 50;
        }elseif($cliente=="papagaio"){
            $resultado+=12;
        }elseif($cliente=="gato"){
            $resultado+=30;
        }elseif($cliente=="nenhum"){
            $resultado-=20;
        }
            echo "tipo de animal: ",$cliente,"<br/>";
            echo "valor total: ",$resultado;
        ?>
            </center>
    
    </body>
</html>
 

</:doctype>
