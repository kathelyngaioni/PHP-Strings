<?php

//função str_contains() retorna booleano
$nome = "Kathelyn Gaioni";
var_dump(str_contains($nome, 'Gaioni'));

$resultado = str_contains('Teste de string', 'de');
echo "$resultado". PHP_EOL;

$nomeCompleto = "Kathelyn Tereza Mendes Gaioni";
if(str_starts_with($nomeCompleto, 'Kathelyn'))
  echo "Meu nome começa com 'Kathelyn'". PHP_EOL;

if(str_ends_with($nomeCompleto,'Gaioni'))
  echo "Meu nome termina com 'Gaioni'" . PHP_EOL;
?>