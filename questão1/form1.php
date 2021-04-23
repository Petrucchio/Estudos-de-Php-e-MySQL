<!doctype html>
<html>
    <head>
        <title>Logica de programação php</title>
        <meta charset="utf-8">
    </head>
    <h1> quantidade de calorias baseado nas opções escolhidas </h1>
    
    <?php
    $calltotal=0; //indica a quantidade inicial de calorias
    if(isset($_POST['vegetariano']))//verifica se a opção foi marcada
{
    echo "vegetariano foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['vegetariano'];
}
    if(isset($_POST['peixe']))//verifica se a opção foi marcada
{
    echo "peixe foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['peixe'];
}
    if(isset($_POST['frango']))//verifica se a opção foi marcada
{
    echo "frango foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['frango'];
}
    if(isset($_POST['carne']))//verifica se a opção foi marcada
{
    echo "carne foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['carne'];
}   
    if(isset($_POST['abacaxi']))//verifica se a opção foi marcada
{
    echo "abacaxi foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['abacaxi'];
}
    if(isset($_POST['sorvete_diet']))//verifica se a opção foi marcada
{
    echo "sorvete diet foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['sorvete_diet'];
}
    if(isset($_POST['mouse_diet']))//verifica se a opção foi marcada
{
    echo "mouse diet foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['mouse_diet'];
}
    if(isset($_POST['mouse_chocolate']))//verifica se a opção foi marcada
{
    echo "mouse de chocolate foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['mouse_chocolate'];
}   
    if(isset($_POST['cha']))//verifica se a opção foi marcada
{
    echo "chá foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['cha'];
}
    if(isset($_POST['suco_de_laranja']))//verifica se a opção foi marcada
{
    echo "suco de laranja foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['suco_de_laranja'];
}
    if(isset($_POST['suco_de_melao']))//verifica se a opção foi marcada
{
    echo "suco de melão foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['suco_de_melao'];
}
    if(isset($_POST['refrigerante_diet']))//verifica se a opção foi marcada
{
    echo "refrigerante diet foi marcado! <br/>";//se sim imprime, checkbox marcado
       $calltotal+=$_POST['refrigerante_diet'];
}   
    
    
    echo "valor de calorias totais: " . $calltotal; //mostra a quantidade total de calorias
    
    
    
    ?>
    
    
    <body> 
    
    </body>
</html>


</:doctype>
