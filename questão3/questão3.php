<?php
$proprietario = (bool) rand(0, 1) ? "checked" : null;
$apartamento = (bool) rand(0, 1) ? "checked" : null;
?>
<!doctype html>
<html lang"pt-br">
    
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
       
    </head>
  
    
    <body> 
        <center>
            <form action="form3.php" method="post"><!--inicia o formulario mandando para o form1.php assim que clicar no botão cadastrar-->
        <h1> questão 3 </h1>
            <p></p>
                <h2>proprietario</h2>
                <input type="text" name="proprietario" size="60" maxlength="40"<?php echo $proprietario ?>/>
            <p></p>
                <h2>apartamento</h2>
                <input type="text" name="apartamento" size="30" maxlength="20"<?php echo $apartamento ?>/>
            <p></p>
                <h2>Tipo de animal no apartamento</h2>
            <select name="tipoanimal"> <!-- inicia a tabela de seleção-->
                <option value="cao">cão</option> <!-- mostra a opção-->
                <option value="papagaio">papagaio</option> <!-- mostra a opção-->
                <option value="gato">gato</option> <!-- mostra a opção-->
                <option value="nenhum">nenhum</option> <!-- mostra a opção-->
            </select>
            <P></P>
            <input type="submit" value="enviar"  /><!--cria o botão-->
                
                
            </form>
            </center>
         
    
    </body>
</html>
 

</:doctype>
