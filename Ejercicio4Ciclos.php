<?php
// ciclo while
// mostrar 10 primeros numeros en pantalla 

$inicio= 0;
while($inicio<10){
echo "el valor de inicio es:",$inicio,"<br/>";
$inicio++; 
}

// ciclo for 
// mostrar 10 primeros numeros en pantalla 

for($comienzo=0;$comienzo<10;$comienzo++){
echo "el valor de comienzo es:",$comienzo,"<br/>";

//*Usa while cuando quieres que el ciclo dependa de una condición que puede no estar relacionada con un número fijo de iteraciones.
//*Usa for cuando tienes un número determinado de iteraciones o cuando trabajas con secuencias (como listas o rangos).//

}
?>