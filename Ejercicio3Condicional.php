<?php
//condicional simple - doble 

// calcular la edad de la persona  e indicar si es mayor o menor de edad

$edad = 16;

if ($edad >= 18) {
    echo "Usted es mayor de edad"."<br>";
} else {
    echo "Usted es menor de edad"."<br>";
}

// conditional anidado // dias de la semana

$numero =3;

if ($numero==1) {
    echo "Lunes";
    } elseif ($numero==2) {
        echo "Martes"."<br>";
    } elseif ($numero==3) {
        echo "Miércoles"."<br>";
    } elseif ($numero==4) {
        echo "Jueves"."<br>";
    } elseif ($numero==5) {
        echo "Viernes"."<br>";
    } elseif ($numero==6) {
}

// estructura swich

$dia = 2;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    default:
        echo "Dia que no se encietra entrer los primeros 5 dias de la semana";
}
?>
