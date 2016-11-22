<?php
//Dado	un	determinado	número,	determinar	cuántos	dígitostiene.	
//Por	ejemplo,	el	número	123456	tiene	un	total	de	6	dígitos.

$numero=123456;
$contador=0;

while($numero>0){
    $numero=floor($numero/10);
    $contador++;
}
echo "El numero de digitos es:".$contador;

?>