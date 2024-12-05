<?php
    function terminarNumero($numero) {
        //residuo
        /* if($numero % 10 == 4) {
            echo "Tu numero termina en 4 <br>";
        } else {
            echo "No termina en 4 <br>";
        } */

        //operador ternario
        echo $numero % 10 == 4 ? "Tu numero termina en 4 <br>" : "No termina en 4 <br>";
    }

    function terminarNumeroV2($numero) {
        $numero_convertido = explode(",", $numero);

        //end = metodo que devuelva la ultima posicion del arreglo
        $ultima_posicion = end($numero_convertido);

        if($ultima_posicion == 4) {
            echo "Tu numero termina en 4 <br>";
        } else {
            echo "No termina en 4 <br>";
        }
    }


    terminarNumeroV2("4,5,4");

    function calcularImpuestos($precio) {
        if($precio > 0 && $precio < 20) {
            echo "No genera impuesto";
        } else if($precio > 20.01 && $precio < 40) {
            echo "Tienes el 30% de impuesto";
        } else if($precio > 40.01 && $precio < 500) {
            echo "Tienes el 40% de impuesto";
        } else {
            echo "Tienes el 50% de impuesto";
        }
    }

    function vehiculo($tipo) {
        switch ($tipo) {
            case 'Vehiculo Particular':
                echo "Vas a pagar 0.75";
                break;
            
            case 'Microbus':
                echo "Vas a pagar 1.25";
                break;
                
            case 'Moto':
                echo "Vas a pagar 0.30";
                break;                
                
            default:
                echo "Vas a pagar $3.00";
                break;
        }
    }

    //Repetitivas: for, while, do while

    //contador del 1 al 100
    function contador() {
        for($i = 1; $i <= 100; $i++) {
            echo $i . "<br>";
        }
    }

    contador();

    function contadorAlReves() {
        //while
        $contador = 100;
        while ($contador >= 1) {
            echo $contador;
            $contador--;
        }
    }

    //do while

    /*
        srtlen() => devuelve la longitud de una cadena
        count() => devuelve la longitud de un arreglo
    */
    function calcularMedia($array) {
        //saber la media: la suma de los numeros entre la cantidad de numeros
        $i = 0;
        $suma = 0;
        do {
            $suma += $array[$i];
            $i++;
        } while ($i < count($array));

        $media = $suma / count($array);
        echo "La media del arreglo es: ".$media;
    }

    calcularMedia([23,45,34,12]);
?>