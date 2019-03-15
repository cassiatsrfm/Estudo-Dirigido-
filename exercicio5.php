<?php

print "Que distancia você pretende percorrer em km?";
$distancia  = fgets (STDIN);

print "Qual a velocidade média da viagem?";
$velocidade = fgets (STDIN);

$tempo = $distancia/ $velocidade;
print "O tempo de viagem foi de: $tempo hrs.";

?>