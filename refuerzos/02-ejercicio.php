<?php

function insertionSort($array) {
    $lenght = count($array);

    for( $i = 1; $i < $lenght; $i++) {
        $temp = $array[$i];
        $j = $i -1;

        while( $j >= 0 && $array[$j] > $temp) {
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $temp;
    }

    return $array;
}

function insertionSort2($array) {
    $lenght = count($array);
    $frutas = array_keys($array); // ["Manzanas", "Bananas", "Cerezas", "Duraznos"]

    for( $i = 1; $i < $lenght; $i++) {
        $temp = $frutas[$i];
        $j = $i -1;
        //            Ej: $array["Manzanas"]    > $array["Bananas"]
        //                              3.50    >  1.20
        while( $j >= 0 && $array[ $frutas[$j] ] > $array[$temp]) {
            $frutas[$j+1] = $frutas[$j];
            $j--;
        }
        $frutas[$j+1] = $temp;
    }
    // Ya ordenados los nombres($frutas) creamos el array de valores
    $sorted = [];
    
    foreach($frutas as $fruta) {
        $sorted[$fruta] = $array[$fruta];
    }

    return $sorted;
}


$array = [5, 6, 1, 3, 2, 4];
$sorted = insertionSort($array);
echo implode(" ", $sorted) . "\n";

$frutasPrecios = ["Manzanas" => 3.50, "Bananas" => 1.20, "Cerezas" => 2.80, "Duraznos" => 5.00];
$fpSorted = insertionSort2($frutasPrecios);
foreach ($fpSorted as $key => $value) {
    echo "$key: $value, ";
}