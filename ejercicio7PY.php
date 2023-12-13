<?php
// Función que determina si un número es primo.
function fibonacci($n) {
    $vector = [];

    if ($n < 1) {
        return $vector;
    } elseif ($n == 1) {
        $vector[] = 1;
        return $vector;
    } elseif ($n >= 2) {
        // Implementa las series de Fibonacci
        $vector[] = 1;
        $vector[] = 1;

        // Implementa el bucle
        for ($i = 2; $i < $n; $i++) {
            $numero_next = $vector[$i - 1] + $vector[$i - 2];
            $vector[] = $numero_next;
        }

        return $vector;
    } elseif ($n == 1) {
        $vector[0] = 1;
    }

    return $vector; // Retorno de la función
}

// Programa principal
echo "SERIE DE FIBONACCI\n";
$numero = intval(readline("Introduzca un número: "));
echo "$numero elementos --> FIBONACCI: " . implode(", ", fibonacci($numero)) . ".\n";
?>

