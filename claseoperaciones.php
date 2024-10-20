<?php
class Matematicas{

public static function sumar($num1,$num2){
    $suma = $num1+$num2;
    return $suma;
}

public static function restar($num1,$num2){
    $resta = $num1-$num2;
    return $resta;
}

public static function multiplicar($num1,$num2){
    $multiplicacion = $num1*$num2;
    return $multiplicacion;
}

public static function dividir($num1,$num2){
    if($num2!=0){
        $division = $num1/$num2;
        return $division;
    }else{
        return "Error: División por cero.";
    }

}
}

?>