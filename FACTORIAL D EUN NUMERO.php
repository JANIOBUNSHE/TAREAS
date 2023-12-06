<?php
/*con funcion recursiva*/
function calcularFactorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFactorial($numero - 1);
    }
}

$numero = 5; // Cambia este número por el que desees calcular el factorial
$resultado = calcularFactorial($numero);
echo "El factorial de $numero es $resultado\n ";


//con bucle for
function Factorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$numero = 6; // Cambia este número por el que desees calcular el factorial
$resultado = Factorial($numero);
echo "El factorial de $numero es $resultado\n";


$i = 1;
$producto = 1;
$numero = 5;

while ( $i <= $numero){
    $producto = $producto * $i;
    $i = $i + 1;
}

echo "El producto de los números del 1 al 10 es = $producto";