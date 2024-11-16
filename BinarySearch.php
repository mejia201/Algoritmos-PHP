<?php

function binarySearch(array $arr, int $target): void {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2);

        if ($arr[$mid] === $target) {
            echo "Elemento encontrado en el índice: $mid";
            return;
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    echo "Elemento no encontrado en el array.";
}


// Ejemplo de uso
$array = [1, 3, 5, 7, 9, 11];
$resultado = binarySearch($array, 7);  //Busqueda del 7, con salida de la posicion que seria 3
echo $resultado; 



?>