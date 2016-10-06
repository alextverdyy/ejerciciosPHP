<?php
/**
 * Created by PhpStorm.
 * User: AlexTverdyy
 * Date: 05/10/2016
 * Time: 8:44
 */



$criptado = array();
$cadena = "Ernu  n cyna dhoocuea  on ,nqr l oudladmiau ebergM rrmaaceoe";
$criptado2 = array();




$longCadena =  strlen($cadena);
for ($y = 1; $y < $longCadena; $y++) {
if ($longCadena % $y == 0){
    desencripta($y,($longCadena/$y),$cadena);
}
}


function desencripta($ancho, $alto, $cadena)
{
    $varMet = 0;
    echo $alto."-".$ancho;


    $varMet = 0;
    $cadenaCriptada = $cadena;
    for ($j = 0; $j < $ancho; $j++) {
        for ($y = 0; $y < $alto; $y++) {
            // echo $criptado[$y][$j];
             $criptado[$y][$j] = substr($cadenaCriptada, $varMet,1);
             $varMet++;
        }
    }
    echo "<br>";
    $cadDesencriptada = array();
    $varMet = 0;
    for ($j = 0; $j < $ancho; $j++) {
        for ($y = 0; $y < $alto; $y++) {
            // echo $criptado[$y][$j];
            $cadDesencriptada[$j][$y] = substr($cadenaCriptada, $varMet, 1);
            $varMet++;
        }
    }

    $cadFinal = "";
    for ($j = 0; $j < $alto; $j++) {
        for ($y = 0; $y < $ancho; $y++) {
            // echo $criptado[$y][$j];
            $cadFinal .= $criptado[$j][$y];
        }
    }
    echo "<pre>".$cadFinal."</pre>";
    echo "<br>";

}


?>