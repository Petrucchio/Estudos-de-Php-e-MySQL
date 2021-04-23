<?php

$vegetariano = (bool) rand(0, 1) ? "checked" : null;
$peixe  = (bool) rand(0, 1) ? "checked" : null;
$frango = (bool) rand(0, 1) ? "checked" : null;
$carne  = (bool) rand(0, 1) ? "checked" : null;
$abacaxi = (bool) rand(0, 1) ? "checked" : null;
$sorvete_diet  = (bool) rand(0, 1) ? "checked" : null;
$mouse_diet = (bool) rand(0, 1) ? "checked" : null;
$mouse_chocolate  = (bool) rand(0, 1) ? "checked" : null;
$cha = (bool) rand(0, 1) ? "checked" : null;
$suco_de_laranja  = (bool) rand(0, 1) ? "checked" : null;
$suco_de_melao = (bool) rand(0, 1) ? "checked" : null;
$refrigerante_diet  = (bool) rand(0, 1) ? "checked" : null;
?>

<!doctype html>
<html lang"pt-br">
    
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
       
    </head>
  
    
    <body> 
        <h1> Questão número 1 </h1><!--//titulo-->
        <form action="form1.php" method="post"><!--inicia o formulario mandando para o form1.php assim que clicar no botão cadastrar-->
    
            <br> <!--pula linha-->
            <h2>escolha um prato </h2>
            
                <input type="checkbox" name="vegetariano" value=180 <?php echo $vegetariano; ?>>vegetáriano 180 calorias <!--cria a check box e atribui o valor se for marcado-->
            <br> <!--pula linha-->
                <input type="checkbox" name="peixe" value=230 <?php echo $peixe; ?>>peixe 230 calorias <!--cria a check box e atribui o valor se for marcado-->
            <br> <!--pula linha-->
                <input type="checkbox" name="frango" value=250 <?php echo $frango; ?> >frango 250 calorias <!--cria a check box e atribui o valor se for marcado-->
            <br> <!--pula linha-->
                <input type="checkbox" name="carne" value=350 <?php echo $carne; ?> >carne 350 calorias <!--cria a check box e atribui o valor se for marcado-->
            <p></p>
            <h3>escolha uma sobremesa</h3>
                <input type="checkbox" name="abacaxi" value=75 <?php echo $abacaxi; ?> >abacaxi 75 calorias
            <br>
                <input type="checkbox" name="sorvete diet" value=110 <?php echo $sorvete_diet; ?> >sorvete diet 110 calorias
            <br>
                <input type="checkbox" name="mouse diet" value=170 <?php echo $mouse_diet; ?> >mouse diet 170 calorias
            <br>
                <input type="checkbox" name="mouse chocolate" value=200 <?php echo $mouse_chocolate; ?> >mouse chocolate 200 calorias
            <br>
            <p></p>
            <h4>escolha uma bebida</h4>
             <input type="checkbox" name="chá" value=20 <?php echo $cha; ?> >cha 20 calorias
            <br>
                <input type="checkbox" name="suco de laranja" value=70 <?php echo $suco_de_laranja; ?> >suco de laranja 70 calorias
            <br>
                <input type="checkbox" name="suco de melão" value=100 <?php echo $suco_de_melao; ?> >suco de melão 100 calorias
            <br>
                <input type="checkbox" name="refrigerante diet" value=65 <?php echo $refrigerante_diet; ?> >refrigerante diet 65 calorias
            
                
            <br> <!--pula linha-->
            <input type="submit" value="cadastrar"  /><!--cria o botão-->
            
        </form>
    
    
    </body>
</html>
 

</:doctype>
