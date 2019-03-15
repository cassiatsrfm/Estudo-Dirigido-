<?php

print "Por quantos anos você fuma?";
$anos = fgets (STDIN);

print "Quantos cigarros você fuma por dia?";
$cigarros = fgets (STDIN);

$anos = ($anos * 365);
$minutos_dia  = ($cigarro * 10) / 24;
$total_dias = $anos + $minutos_dia;

print "Você perdeu $total_dias dias de vida!";

?>