<?php
// Marouane Saidi Rahim
// Función que determina si un número es par.
function esPar($numero) {
    return $numero % 2 == 0;
}

function esImpar($numero) {
    return $numero % 2 != 0;
}

function generarPares($valores, $inicio) {
    $pares = [];
    $numero = $inicio;

    if (esImpar($inicio)) {
        $numero = $inicio + 1;
    }

    while ($valores > 0) {
        $pares[] = $numero;
        $numero += 2;
        $valores--;
    }

    return $pares;
}

function generarImpares($valores, $inicio) {
    $impares = [];
    $numero = $inicio;

    if (esPar($inicio)) {
        $numero = $inicio + 1;
    }

    while ($valores > 0) {
        $impares[] = $numero;
        $numero += 2;
        $valores--;
    }

    return $impares;
}

// Programa principal
echo "Par e impar\n";
$n = intval(readline("Introduzca un número: "));
echo "$n es par --> " . (esPar($n) ? "true" : "false") . ".\n";

$m = intval(readline("Introduzca el número de valores: "));
$i = intval(readline("Introduzca el número inicial: "));
$x = generarPares($m, $i);
$y = generarImpares($m, $i);

echo "Impares: " . implode(", ", $y) . "\n";
echo "Pares: " . implode(", ", $x) . "\n";
?>

