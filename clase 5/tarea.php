<?php
//Haz un programa que declare una cadena y la muestre en mayúsculas.
$cadena = "pedro pica papas";
$cadena_mayusculas = strtoupper($cadena); 
echo("<p>Cadena convertida en mayúsculas: cadena original: $cadena; cadena en mayúsculas: $cadena_mayusculas </p> </br>");

//Haz un programa que declare un arreglo de edades y muestre la edad mayor
$edades = array(15, 13, 10, 30, 24, 11, 14,);
$edad_mayor = max($edades);
echo("<p>Arreglo de edades: </p>");
print_r($edades);
echo("<p> La edad mayor es: $edad_mayor </p> </br>");
//Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$palabras = array("computadora", "sol", "programacion", "php", "desarrollo", "cielo", "universidad");
echo("<p>Arreglo de palabras: </p>");   
print_r($palabras);
echo("<p>Palabras con más de 5 letras: </p>");
foreach ($palabras as $palabra) {
    if (strlen($palabra) > 5) {
        echo("<p>$palabra</p>");
    }
}
//Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena = "hola juanito";
$letras = array();
for ($i = 0; $i < strlen($cadena); $i++) {
    $letra = substr($cadena, $i, 1);
    if (isset($letras[$letra])) {
        $letras[$letra]++;
    } else {
        $letras[$letra] = 1;
    }
}
echo("<p>Cadena: $cadena</p>");
echo("<p>Veces que aparece cada letra:</p>");
foreach ($letras as $letra => $cantidad) {
    echo("<p>$letra: $cantidad veces</p>");
}
//Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$pares = array();
$impares = array();
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}


//Haz un programa que declare una cadena y cuente cuántas vocales tiene.
$cadena = "esto es una cadena de texto";
$vocales = array('a', 'e', 'i', 'o', 'u');
$contador_vocales = 0;
for ($i = 0; $i < strlen($cadena); $i++) {
    $letra = strtolower(substr($cadena, $i, 1));
    if (in_array($letra, $vocales)) {
        $contador_vocales++;
    }
}



//Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = array(
    "manzanas" => 10,
    "peras" => 3,
    "uvas" => 8,
    "bananas" => 2
);
echo("<p>Productos con cantidad menor a 5:</p>");
foreach ($productos as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo("<p>$producto: $cantidad unidades</p>");
    }
}


//Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "Hola Juan, ¿cómo estás?";
$palabra_a_reemplazar = "Juan";
$nueva_palabra = "Pedro";
$frase_modificada = str_replace($palabra_a_reemplazar, $nueva_palabra, $frase);
echo("<p>Frase original: $frase</p>");
echo("<p>Frase modificada: $frase_modificada</p>");



//Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.

// Arreglo asociativo de alumnos con sus calificaciones
$alumnos = [
    "Juan" => [8, 9, 7, 10],
    "María" => [9, 9, 8, 9],
    "Pedro" => [7, 6, 8, 7],
    "Ana" => [10, 9, 10, 10]
];

// Recorrer el arreglo y calcular promedios
foreach ($alumnos as $nombre => $calificaciones) {
    $suma = array_sum($calificaciones);
    $cantidad = count($calificaciones);
    $promedio = $suma / $cantidad;

    echo "Alumno: $nombre <br>";
    echo "Calificaciones: " . implode(", ", $calificaciones) . "<br>";
    echo "Promedio: " . number_format($promedio, 2) . "<br><br>";
}




//Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
$nombres = array("Ana", "Carlos", "Elena", "Miguel", "Isabel", "Juan", "Oscar");
echo("<p>Nombres que empiezan con vocal:</p>"); 
foreach ($nombres as $nombre) {
    $primera_letra = strtolower(substr($nombre, 0, 1));
    if (in_array($primera_letra, array('a', 'e', 'i', 'o', 'u'))) {
        echo("<p>$nombre</p>");
    }
}
?>