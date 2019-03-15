<?php
 
 print "Digite quantos metros quadrados você deseja pintar:";
 $metros = fgets (STDIN);

 $litros = $metros /6;
 $latas = ceil ($litros / 18);
 $preco_lata = $latas * 80.00;
 $galao = ceil ($litros/3.6);
 $preco_galao = $galao * 25.00;


 print "Opçãp 1: Apenas latas de 18L \n Opção 2: Apenas galões de 3.6L \n Opção3: Misturar latas e galões \n";
 $opcao = fgets (STDIN);

 switch ($opcao) {
 	case 1:
 	print "Você comprará $latas latas no valor de: $preco_lata reais";
 	break;

 	case 2:
 	print "Você comprará $galao galões no valor de: $preco_galao reais";
 	break;

 	case 3:
 	$a1 = $latas % 18;
 	$a2 = ceil ($a1 / 3.6);
 	$a3 = ($latas * 80.00) + ($a2 * 25.00);
 	$a4 = $a3 - ($a3 * 0.10);

 	print "Você irá comprar $latas latas e $a2 galões, pagando $a4 reais.";
 	break;
 }

 ?>