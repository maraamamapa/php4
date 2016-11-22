<?php
//Dado	 un	 determinado	 número,devolver el	dígito mayor que haya en dicho número.	 
//Por ejemplo si el	número en cuestión es el 56783 el dígito mayor a mostrar en	base	
//a	dicho número es	el dígito 8.
$numero=56783;
$digitoMayor=$numero%10;

while ($numero>0){
    $digito=$numero%10;
    
    if($digito>$digitoMayor){
        $digitoMayor=$digito;
    }
    
    $numero/=10;
}
echo "El digito mayor es:".$digitoMayor;

?>