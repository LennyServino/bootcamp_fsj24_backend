
<?php
//contratos que la clase deba cumplir
interface Kodigo{
    public function darClase();
}

interface Notas{
    public function verNotas();
}

interface GestionNotas{
    public function registrarNotas();
}

interface Tarea{
    public function enviarTareas();
}

interface Clase{
    public function darClase();
}

abstract class Persona{
    public $nombre;
    public $telefono;
    public $correo;

    public function __construct()
    {
        //code..
    }

    public function informacion(){
        echo "Informacion General de la persona";
    }

    //metodo obligatorio
    public abstract function verPerfil();
}

class Estudiante implements Notas, Tarea{
    public function verNotas()
    {
        
    }

    public function enviarTareas()
    {
        
    }
}

class Coach extends Persona implements Notas, GestionNotas, Clase{

    public function registrarNotas()
    {
        //code..
    }

    public function verNotas()
    {
        
    }

    public function darClase()
    {
        
    }

    public function verPerfil()
    {
        
    }
}