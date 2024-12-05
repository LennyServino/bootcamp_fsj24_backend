<?php
    function busqueda_lineal($array, $value) {
        foreach ($array as $item) {
            if($item == $value) {
                return $item;
            } 
        }
        return -1;
    }

    function busqueda_lineal2($array, $value) {
        for ($i=0; $i < count($array) ; $i++) { 
            if ($array[$i] == $value) {
                return $i;
            }
        }
        return -1;
    }

    $result = busqueda_lineal2([3,5,1,4,7,10], 5);

    if ($result != -1) {
        echo "El elemento se encontro en la posicion $result <br>";
    } else {
        echo "No se encontro el elemento <br>";
    }

    $busqueda = array_search(1, [3,5,1,4,7,10]);
    echo $busqueda;
?>