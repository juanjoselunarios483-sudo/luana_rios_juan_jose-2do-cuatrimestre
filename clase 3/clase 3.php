<?php
$num1 = 28;
$num2 = 15;

// condicional if simple
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2 </br>";
}

// condicional if-else
if ($num1 < $num2) {
    echo "$num1 es menor que $num2 </br>";
} else {
    echo "$num1 no es menor que $num2 </br>";
}
// condicional if-elseif-else
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2 </br>";
} elseif ($num1 < $num2) {
    echo "$num1 es menor que $num2 </br>";
} else {
    echo "$num1 es igual a $num2 </br>";
}

// condicional switch
$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Día no válido";
}
// bucles
// bucle while
$contador = 0;
while ($contador < 10) {
    echo "Contador (while): $contador </br>";
    $contador++;
}
// bucle do-while
$contador2 = 0;
do {
    echo "Contador (do-while): $contador2 </br>";
    $contador2++;
} while ($contador2 < 10);

// bucle for
for ($i = 0; $i < 10; $i++) {
    echo "Contador (for): $i <br>";
}
// bucle foreach
$frutas = array("Manzana", "pera", "mango", "kiwi", "uva");
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}