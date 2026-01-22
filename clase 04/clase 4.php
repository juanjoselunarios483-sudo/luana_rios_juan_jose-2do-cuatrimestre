<?php

//manejo de cadenas
$cadena1 = "esto es una cadena de texto";
$cadena2 = 'esto es otra cadena de texto';

//concatenacion
$cadena_conteneada = $cadena1 . " " . $cadena2;
echo("<p>Cadena concatenada:  $cadena_conteneada </p> </br>");
//longitud de cadena
$longitud_cadena1 = strlen($cadena1); //strlen() devuelve la longitud de una cadena es decir el numero de caracteres que contiene incluyendo los espacios y los caracteres especiales
$longitud_cadena2 = strlen($cadena2);
echo("<p>Longitud de cadena 1:  $longitud_cadena1  <br> longitud de cadena 2:  $longitud_cadena2 </p> </br>");

//convertir una cadena a mayusculas
$cadena1_mayusculas = strtoupper($cadena1); //strtoupper() convierte todos los caracteres de una cadena a mayusculas
echo("<p>Cadena 1 convertida  en mayusculas: cadena original:  $cadena1_mayusculas; cadena en mayusculas: $cadena1_mayusculas </p> </br>");
//convertir una cadena a minusculas
$cadena2_minusculas = strtolower($cadena2); //strtolower() convierte todos los caracteres de una cadena a minusculas
echo("<p>Cadena 2 convertida  en minusculas: cadena original:  $cadena2; cadena en minusculas: $cadena2_minusculas </p> </br>");

//convertir una cadena en arreglo de palabras
$nombres = "juan, mario, enrique, pablo, lucas, martha, fernanda";
echo("<p> cadena de nombres: $nombres </p> <br>");
$arreglo_nombres = explode(", ", $nombres); // explode() la funcion explode() divide una cadena en un arreglo utilizando un delimitador especificado.
echo("<p> arreglo de nombres: </p>");
print_r($arreglo_nombres);
foreach($arreglo_nombres as $nombre){
    echo("<li> - $nombre </li>");
}

$frutas = "manzana pera uva naranja sandia melon cereza";
$arreglo_frutas = explode(" ", $frutas);
echo("<p> cadena de frutas: $frutas </p> <br>");
echo("<p> arreglo de frutas: </p>");
print_r($arreglo_frutas);
foreach($arreglo_frutas as $fruta){
    echo("<li> - $fruta </li>");
    }


//convertir un arreglo en una cadena
$arreglo_colores = array("rojo", "cafe", "azul", "verde", "amarillo", "naranja", "morado", "rosa");
echo("<p> arreglo de colores: </p>");
print_r($arreglo_colores);
$cadena_colores = implode(", ", $arreglo_colores); //implode() la funcion implode() une los elementos de un arreglo en una sola cadena utilizando un delimitador especificado.
echo("<p> cadena de colores: $cadena_colores </p> <br>");
//otras funciones de manejo de cadenas
//encontrar la posicion de una subcadena dentro de una cadena
$frase = "el aprendis de php es divertido y emocionante";
$sub_cadena = "php";
$posicion_subcadena = strpos($frase,$sub_cadena); //strpos() devuelve la posicion de la primera ocurrencia de una subcadena dentro de una cadena
echo("<p> la subcadena '$sub_cadena' se encuentra en la posicion: $posicion_subcadena dentro de la frase: '$frase' </p> <br>");

//reemplazar una cadena por otra dentro de una cadena
$frase_modificada = str_replace("php", "python", $frase); //str_replace() reemplaza todas las ocurrencias de una subcadena por otra dentro de una cadena
echo("<p> frase original: '$frase' </p>");
echo("<p> frase modificada: '$frase_modificada' </p> <br>");
str_shuffle($frase); //str_shuffle() mezcla aleatoriamente los caracteres de una cadena
echo("<p> frase mezclada aleatoriamente: '". str_shuffle($frase) . "' </p> <br>");  


