<?php
$arquivo = fopen('produtos.txt', "r");
while (!feof ($arquivo)) {
  $nome = fgets($arquivo, 4096);
  if ($maior > $nome){
    $maior = fgets($arquivo, 4096);
  }
  
}
echo $maior."<br>";
fclose ($arquivo);
?>
