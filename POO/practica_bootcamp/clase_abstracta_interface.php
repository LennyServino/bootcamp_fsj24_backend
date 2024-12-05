<?php
abstract class Animal{
    //puedo tener atributos y metodos
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //metodo abstracto que solo declaramos
    //metodo oblogatorio para clases hijas
    public abstract function hacerSonido();
}

//solo sirven para hereda su contendio (atributos y metodos)

class Gato extends Animal{

    public function hacerSonido()
    {
        return "Los gatos hacen miau";
    }
}

class Perro extends Animal{

    public function hacerSonido()
    {
        return "Los perroshacen wuaf";
    }
}

$gato = new Gato("Figo", 6);
echo "Llamando el metodo<br>";
$gato->hacerSonido();

#INTERFACES
interface Animales{
    //metodos sin comportamientos, solamente son obigatorios
    public function hacerSonido();
    public function comer();
}

interface Mamifero{
    public function mamifero();
}

class Conejo extends Animal implements Animales, Mamifero{
    public function hacerSonido()
    {
        //code
    }

    public function comer()
    {
        return "El conejo come zanahorias";
    }

    public function mamifero()
    {
        //code
    }
}

$conejo = new Conejo("Juan", 5);
$conejo->comer();