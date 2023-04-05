<?php
//strpos : posição
//Criar o nome do usuario e dominio a partir do email:

$informacoes = 'Kathelyn Gaioni , 24 , gaioni.kathelyn@outlook.com';
$email = 'gaioni.kathelyn@outlook.com';
$posicaoArroba = strpos($email,'@');

                          //inicio   //fim
$usuario = substr($email, 0, $posicaoArroba); //substring
$dominio = substr($email, $posicaoArroba + 1);
echo $usuario . PHP_EOL ;
echo $dominio . PHP_EOL;

//explode retorna um array
                                 //separador
List($nome, $idade, $email) = explode(',',$informacoes);
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Idade: ' . $idade . PHP_EOL;
echo 'Email: ' . $email . PHP_EOL;

?>