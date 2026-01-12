<?php
# ejercicio 1: crear un programa en php que calcule el are a de un rectangulo (base * altura ) y el perimetro (2 * (base + altura)) y muestre los resultados en pantalla.
$base = 10;
$altura = 5;
$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
echo "<p> area del rectangulo: $area <br> perimetro del rectangulo: $perimetro </p>";
#ejercicio 2: crear un programa en php que realice las suiguientes converciones de monedas: de peso a dolar, de dolar a euro, de euro a libra esterlina, y de peso aeuro. Mostrar los resultados en pantalla.
$peso = 10000;
$dolar = $peso / 17.93; // 1 dolar = 17.93 pesos
$euro = $dolar / 1.17; // 1 euro = 1.17 dolares
$libra = $euro / 1.15; // 1 libra esterlina = 1.15 euros
$peso_a_euro = $peso / 20.95; // 1 euro = 20.95 pesos
echo "<p> conversiones de monedas: <br> de peso a dolar: $dolar <br> de dolar a euro: $euro <br> de euro a libra esterlina: $libra <br> de peso a euro: $peso_a_euro </p>";
#ejercicio 3: crear un programa en php que calcule el imc (indice de masa corporal) de una persona y muestre un mensaje indicando si la persona tiene bajo peso, peso normal, sobrepeso o obesidad. El imc se calcula con la formula: imc = peso (kg) / (altura (m))^2
$peso = 60; // en kg
$altura = 1.70; // en metros 
$imc = $peso / (altura ** 2);
if ($imc < 18.5) {
    $mensaje = "bajo peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    $mensaje = "peso normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    $mensaje = "sobrepeso";
} else {
    $mensaje = "obesidad";
}
echo "<p> tu imc es: $imc <br> mensaje: $mensaje </p>";
# ejercicio 4: crear un programa en php que convierta una temperatura dada en grados celsius a fahrenheit y kelvin. Mostrar los resultados en pantalla. La formula para convertir celsius a fahrenheit es: F = (C * 9/5) + 32. La formula para convertir celsius a kelvin es: K = C + 273.15.
$grados_celsius = 25;
$grados_fahrenheit = ($grados_celsius * 9/5) + 32;
$grados_kelvin = $grados_celsius + 273.15;
echo "<p> conversion de temperatura: <br> de celsius a fahrenheit: $grados_fahrenheit <br> de celsius a kelvin: $grados_kelvin </p>";
?>