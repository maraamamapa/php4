<?php
$numeroInicial=3;
$numerofinal=13;
$cantidadPares=0;
$i=$numeroInicial+1;
while($i<=$numerofinal){
    if($i%2==0){
		$cantidadPares++;
	}
    $i++;
}
echo "la cantidades de pares es:". $cantidadPares;
?>