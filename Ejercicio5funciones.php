<?php
//funcione sin parametros  y sin retorno 
function mensaje(){
    echo "soy una funcion"."<br/>";
}
mensaje();

// funcion predefinida 
function fecha() {
    return date ("d/m/y");}
echo fecha()."<br/>";
 //funcion multiplicar
 function multiplicar() {
    $resultado=4*2;
    return $resultado;}
echo "la multiplicacion es:".multiplicar()."<br/>";

//funcion con parametro y retorno

function sumar($num1,$num2) {
    return $num1 + $num2;}
echo sumar(32,4)."<br/>";

//funcion con parametro opcionales y retorno
    function sumas($num1,$num2,$num3=0) {
    return ($num1+$num2+$num3);
    }
echo sumas(32,4,2)

?>

