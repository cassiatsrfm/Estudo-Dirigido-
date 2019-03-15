<?php

print "Digite o valor da mercadoria:";
$mercadoria = fgets (STDIN);

print "Digite a porcentaem de desconto:";
$desconto = fgets (STDIN);

$desconto_total = $mercadoria * ($desconto/100);
$valor_novo     = ($mercadoria - $desconto_total);

print "O novo valor a ser pago é de: $valor_novo";
print "O desconto foi de: $desconto_total";

?>