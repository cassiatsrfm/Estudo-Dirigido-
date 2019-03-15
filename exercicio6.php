<?php

print "Digite a temperatura em Celsius";
$celsius = fgets (STDIN);

$fahrenheit = (9 * ($celsius / 5 )) + 32;

print "Essa temperatura corresponde a $fahrenheit Fahrenheit."; 

?>