<?php
    function insertionSort($array) {
        for ($i=0; $i < count($array) ; $i++) { 
            $punto_interseccion = $array[$i];
            //j seria la variable donde retrocedamos a una posicion
            $j = $i - 1; //primera vez j = -1
            while ($j >= 0 && $punto_interseccion < $array[$j]) {
                //intercambios
                $array[$j+1] = $array[$j];
                $array[$j] = $punto_interseccion;

                $j = $j - 1;
            }
        }

        return $array;
    }

    insertionSort([23,12,45,4,33,10]);
?>