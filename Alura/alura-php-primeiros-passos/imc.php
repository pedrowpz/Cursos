<?php

$peso = 68;
$altura = 1.68;

$conta1 = $altura*$altura;
$conta2 = $peso/$conta1;
echo "Seu IMC é de $conta2. Você está com o IMC ";

if ($conta2 < 18) {
    echo "abaixo";
} elseif ($conta2 < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado.";

