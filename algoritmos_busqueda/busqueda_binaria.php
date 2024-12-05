<?php
    function bisqueda_binaria($array, $value) {
        $inicio = 0;
        $fin = count($array) - 1;
        while ($inicio <= $fin) {
            $posicion_media = intval(($inicio + $fin) / 2);

            if($array[$posicion_media] == $value) {
                return $posicion_media;
            }

            if($array[$posicion_media] > $value) {
                $fin = $posicion_media - 1;
            } else {
                $fin = $posicion_media + 1;
            }
        }
    }
?>