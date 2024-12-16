<?php
    /*

    Tenemos un sistema donde mostramos mensajes en distintos tipos de salida, como por consola, formato JSON y archivo TXT. Debes crear un programa donde se muestren todos estos tipos de salidas.

    Para este propósito, aplica el patrón de diseño Strategy.
    */

    interface Salida {
        public function mostrar($mensaje);
    }

    class Consola implements Salida {
        public function mostrar($mensaje) {
            echo $mensaje;
        }
    }

    class Json implements Salida {
        public function mostrar($mensaje) {
            echo json_encode($mensaje);
        }
    }

    class Txt implements Salida {
        public function mostrar($mensaje) {
            //file_put_contents("archivo.txt", $mensaje);
            echo $mensaje;
        }
    }

    class Mensaje {
        private $salida;

        public function __construct(Salida $salida) {
            $this->salida = $salida;
        }

        public function mostrarMensaje($mensaje) {
            $this->salida->mostrar($mensaje);
        }
    }

    $mensaje = new Mensaje(new Consola());
    $mensaje->mostrarMensaje("Mensaje por consola");
    echo "<br><br>";

    $mensaje = new Mensaje(new Json());
    $mensaje->mostrarMensaje("Mensaje en formato JSON");
    echo "<br><br>";

    $mensaje = new Mensaje(new Txt());
    $mensaje->mostrarMensaje("Mensaje en archivo TXT");
?>