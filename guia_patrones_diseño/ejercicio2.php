<?php
    /*
    Estamos trabajando con distintas versiones de sistemas operativos Windows 7 y Windows 10. Al compartir archivos como Word, Excel, Power Point, surgen problemas al abrirlos en Windows 10 debido a la falta de compatibilidad con la versión Windows 7. Debes crear un programa donde Windows 10 pueda aceptar estos archivos independientemente de que sean de versiones anteriores.

    Para ello, aplica el patrón de diseño Adapter.
    */

    interface SistemaOperativo {
        public function abrirArchivo($archivo);
    }

    class Windows7 implements SistemaOperativo {
        public function abrirArchivo($archivo) {
            echo "Abriendo archivo $archivo en Windows 7";
        }
    }

    class Windows10 implements SistemaOperativo {
        public function abrirArchivo($archivo) {
            echo "Abriendo archivo $archivo en Windows 10";
        }
    }

    class AdaptadorWindows10 implements SistemaOperativo {
        private $windows7;

        public function __construct(Windows7 $windows7) {
            $this->windows7 = $windows7;
        }

        public function abrirArchivo($archivo) {
            $this->windows7->abrirArchivo($archivo);
        }
    }

    class Computadora {
        public function abrirArchivo(SistemaOperativo $sistemaOperativo, $archivo) {
            $sistemaOperativo->abrirArchivo($archivo);
        }
    }

    $windows7 = new Windows7();
    $adaptador = new AdaptadorWindows10($windows7);
    $windows10 = new Windows10();

    $computadora = new Computadora();
    $computadora->abrirArchivo($adaptador, "archivo.docx");
    echo "<br>";
    $computadora->abrirArchivo($windows10, "archivo.docx");
?>