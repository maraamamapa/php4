<?php
/*5. Crear	 un	 programa que indique si un	número es número	 de Amstrong.Un número es de	Amstrong si	al sumar los cubos de	sus dígitos dan el mismo número.Por	ejemplo,153 es	número	 de	Amstrong ya	que	 13+53+33 da como	resultado 153. Otro	ejemplo	es	el	371	ya	que	al	calcular el	cubo de	sus	dígitos	y sumarlos da el propio número 371.*/
$numero=371;
$copiaNum=$numero;
$suma=0;

while($copiaNum>0){
    $digito=$copiaNum%10;
    $copiaNum=$copiaNum/10;
    $suma=$suma+pow($digito,3);
}
if($numero==$suma){
    echo "Es numero de Amstrong";
}else{
    echo "No es numero Amstrong";
}
?>