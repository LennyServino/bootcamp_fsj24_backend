<?php
    function quickSort($array) {
        //validar que tenga un elemento del arreglo
        if(count($array) > 0) {
            $pivote = $array[0];
            $array_left = [];
            $array_right = [];

            for ($i = 1; $i < count($array) ; $i++) { 
                if($array[$i] < $pivote) {
                    $array_left[] = $array[$i];
                } else {
                    $array_right[] = $array[$i];
                }
            }

            //funcion para concatenar o fusionar arreglos
            return array_merge(quickSort($array_left), array($pivote), quickSort($array_right));
        } else {
            return $array;
        }
    }

    print_r(quickSort([23,12,45,4,33,10]));
?>