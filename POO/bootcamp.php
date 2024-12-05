<?php

class Bootcamp {
    //atributos
    public $nombre;
    protected $coach;
    private $duracion;

    //constructor
    /*
        Tipos de constructores
            - constructor por defecto
            - constructor parametrizado
    */
    public function __construct($nombre, $coach)
    {
        /* $this->nombre = "Bootcamp FSJr";
        $this->coach = "Oscar Lemus";
        $this->duracion = "6 meses"; */
        $this->nombre = $nombre;
        $this->coach = $coach;
        $this->duracion = "6 meses";
    }

    //metodos
    public function temario_bootcamp() {
        $temario = ["POO", "SOLID", "Base de datos"];
        echo "Temario del Modulo 5 POO<br>";
    }

    /* Para los atributos privados creamos los metodos getter y setter */
    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }
}

#creano un objeto de la clase
//constructor por defecto esta vacio
$fjs24 = new Bootcamp("FSJ24A", "Kenia Paiz");
/* $fjs24->nombre = "Full Stack Jr 24A";
$fjs24->temario_bootcamp(); */
print_r($fjs24);
echo "<br>";
$fjs25 = new Bootcamp("FSJ25", "Jairo Vega");
print_r($fjs25);

#creando clase hija
class BoocampINCAF extends Bootcamp {
    public $institucion;

    public function __construct($nombre, $coach, $institucion)
    {
        //podemos heredar el constructor padre
        parent::__construct($nombre, $coach);
        $this->$institucion = $institucion;
    }

    //simulacion de sobrecarga ya que php no la soporta
    public function temario_bootcamp($modulo = null)
    {
        if($modulo == 1) {
            $temario = ["HTML", "CSS", "GIT"];
            echo "Temario MODULO 1";
        } else {
            $temario = ["HTML", "CSS", "GIT", "JAVASCRIPT", "REACT", "PHP"];
            echo "Temario de todos los modulos";
        }
    }
}

echo "<br>";
$incaf = new BoocampINCAF("incaf-fsj14", "Karla Lopez", "Gobierno SV");
$incaf->setDuracion("5 meses");
echo $incaf->getDuracion();
echo "<br>";
print_r($incaf);
?>