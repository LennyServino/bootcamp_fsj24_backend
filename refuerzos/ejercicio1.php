<?php
/* 
Ejercicio 1: Ordenando Palabras por Longitud
Dado un array de palabras, ordena las palabras por longitud de manera ascendente. Puedes
usar el algoritmo de burbuja para este ejercicio. 

Ejemplo:
Entrada: ["php", "programacion", "ordenamiento", "array", "datos"]
Salida: ["php", "array", "datos", "ordenamiento", "programacion"]
*/

//Algortimo Bubble Sort optimizado

function bubbleSort($array) {
    $resultArray = $array;

    $lenght = count($resultArray);
    $isSwapped = true;
    $temp = null;

    while($isSwapped) {
        $isSwapped = false;

        for ($i = 0; $i < $lenght - 1; $i++) { 
            if(strlen($resultArray[$i]) > strlen($resultArray[$i+1])) {
                $temp = $resultArray[$i];
                $resultArray[$i] = $resultArray[$i+1];
                $resultArray[$i+1] = $temp;
                $isSwapped = true;
            }
        }
        $lenght--;
    }
    return $resultArray;
}

$array = [5, 6, 1, 3, 2, 4];
$stringArray = ["php", "programacion", "ordenamiento", "array", "datos"];
$sorted = bubbleSort($stringArray);

echo implode(", ", $sorted)."<br>";

?>