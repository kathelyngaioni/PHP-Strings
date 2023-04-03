<?php
//strpos : posição
//Criar o nome do usuario e dominio a partir do email:

$email = 'gaioni.kathelyn@outlook.com';
$posicaoArroba = strpos($email,'@');
                          //inicio   //fim
$usuario = substr($email, 0, $posicaoArroba); //substring
$dominio = substr($email, $posicaoArroba + 1);
echo $usuario . PHP_EOL ;
echo $dominio . PHP_EOL;




?>