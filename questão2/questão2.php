<?php
$numero1 = (bool) rand(0, 1) ? "checked" : null;
$numero2 = (bool) rand(0, 1) ? "checked" : null;
$operador = (bool) rand(0, 1) ? "checked" : null;
?>


<!doctype html>
<html lang"pt-br">
    
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
       
    </head>
  
    
    <body> 
        
        <form action="form2.php" method="post"><!--inicia o formulario mandando para o form2.php assim que clicar no botão cadastrar-->
           <center>
        <h1> Questão número 2 </h1><!--//titulo-->
            <input type="text" name="numero1" size="30" maxlength="20"<?php echo $numero1 ?>/>
             <p></p>
            <select name="opera"> <!-- inicia a tabela de seleção-->
                <option value="soma">somar</option> <!-- mostra a opção-->
                <option value="subtrair">subtrair</option> <!-- mostra a opção-->
                <option value="multiplicar">multiplicar</option> <!-- mostra a opção-->
                <option value="dividir">dividir</option> <!-- mostra a opção-->
            </select>
             <P></P>
            <input type="text" name="numero2" size="30" maxlength="20" <?php echo $numero2 ?>/>
            
            <P></P>
            <input type="submit" value="calcular"  /><!--cria o botão-->
            </center>
            </form>
    
    </body>
</html>
 

</:doctype>
