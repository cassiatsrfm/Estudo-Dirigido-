<?php 

print "Digite o seu salário:";
$salario = fgets (STDIN);

print "Digite a porcentagem de aumento:";
$aumento = fgets (STDIN);

$aumento_total = $salario * ($aumento / 100);
$salario_novo  = ($salario + $aumento_total);

print "O salario atual é de: $salario_novo";
print "O aumento foi de: $aumento_total";

?>