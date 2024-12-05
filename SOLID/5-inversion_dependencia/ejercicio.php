<?php

//intermediario
interface Usuario{
    public function perfilUsuario();
}

class Estudiante implements Usuario{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }

    public function perfilUsuario()
    {
        echo "Soy un estudiante";
    }
}

class Profesor implements Usuario{
    public function perfilUsuario()
    {
        echo "Soy un profesor";
    }
}

class GestorInscripcion {
    private Usuario $usuario;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
    }
}

$estudiante = new Estudiante("Kenia","KP2024");
$profesor = new Profesor();

$inscripcion = new GestorInscripcion($profesor);
$inscripcion = new GestorInscripcion($estudiante);
print_r($inscripcion);