<?php
// haz un programa que reciba una cadena (ya definida en el codigo) y devuelva la misma cadena pero con las palabras en orden inverso. maneja los posibles errores
$cadena = "Este es un ejemplo de cadena";
function invertirPalabras($cadena) {
    // Verificar si la cadena es válida
    if (!is_string($cadena)) {
        return "Error: La entrada no es una cadena válida.";
    }

    // Dividir la cadena en palabras
    $palabras = explode(" ", $cadena);

    // Invertir el orden de las palabras
    $palabrasInvertidas = array_reverse($palabras);

    // Unir las palabras invertidas en una sola cadena
    $cadenaInvertida = implode(" ", $palabrasInvertidas);

    return $cadenaInvertida;
}
// ejercicio 2: haz un programa que reciba una cadena de texto y que contenga una lista de numeros separados por comas (ya definida en el codigo) y devuelva la suma de esos numeros. maneja los posibles errores
$numerosCadena = "1,2,3,4,5";
function sumarNumeros($numerosCadena) 
{
    // Verificar si la cadena es válida
    if (!is_string($numerosCadena)) {
        return "Error: La entrada no es una cadena válida.";
    }

    // Dividir la cadena en números
    $numerosArray = explode(",", $numerosCadena);
    $suma = 0;

    // Recorrer los números y sumarlos
    foreach ($numerosArray as $numero) {
        // Verificar si cada elemento es un número válido
        if (!is_numeric($numero)) {
            return "Error: La cadena contiene elementos no numéricos.";
        }
        $suma += (float)$numero;
    }

    return $suma;
}
// ejercicio 3: haz un programa que reciba una cadena de texto (ya definida en el codigo) y cuente cuantas veces aparece una cadena especifica dentro de esa cadena maneja los posibles errores
$texto = "Hola mundo, este es un mundo maravilloso";
$cadenaBuscar = "mundo";    
function contarApariciones($texto, $cadenaBuscar) {
    // Verificar si las entradas son válidas
    if (!is_string($texto) || !is_string($cadenaBuscar)) {
        return "Error: Las entradas deben ser cadenas válidas.";
    }

    // Contar las apariciones de la cadenaBuscar en el texto
    $contador = substr_count($texto, $cadenaBuscar);

    return $contador;
}
?>

