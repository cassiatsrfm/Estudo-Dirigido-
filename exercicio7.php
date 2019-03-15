<?php 

print "Por quantos dias você deseja alugar o carro?";
$dias = fgets (STDIN);

print "Quantos km foram rodados pelo carro?";
$km_rodados = fgets (STDIN);

$preco_total = ($dias * 60.00) + ($km_rodados * 0.15);

print "O total a pagar é de: $preco_total.";

?>