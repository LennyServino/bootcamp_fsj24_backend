<?php
    /*
    Crear un programa donde sea posible añadir diferentes armas a ciertos personajes de videojuegos. Debes utilizar al menos dos personajes para este ejercicio.

    Para llevar a cabo esta tarea, aplica el patrón de diseño Decorator.
    */

    interface Personaje {
        public function atacar();
        public function moverse();
    }

    class Guerrero implements Personaje {
        public function atacar() {
            return "El guerrero ataca con puños";
        }

        public function moverse() {
            return "El guerrero se mueve lentamente ";
        }
    }

    class Mago implements Personaje {
        public function atacar() {
            return "El mago ataca con varita";
        }

        public function moverse() {
            return "El mago se mueve rapidamente";
        }
    }

    //decorador base
    class PersonajeDecorator implements Personaje {
        protected $personaje;

        public function __construct(Personaje $personaje) {
            $this->personaje = $personaje;
        }

        public function atacar() {
            return $this->personaje->atacar();
        }

        public function moverse() {
            return $this->personaje->moverse();
        }
    }

    //decorador concreto
    class EspadaDecorator extends PersonajeDecorator {
        public function atacar() {
            return $this->personaje->atacar() . ", una espada";
        }

        public function moverse() {
            return $this->personaje->moverse();
        }
    }

    //otro decorador concreto
    class HechizoDecorator extends PersonajeDecorator {
        public function atacar() {
            return $this->personaje->atacar() . ", un hechizo";
        }

        public function moverse() {
            return $this->personaje->moverse();
        }
    }

    $guerrero = new Guerrero();
    echo $guerrero->atacar() . " y " . $guerrero->moverse() . "<br>";

    $guerreroConEspada = new EspadaDecorator($guerrero);
    echo $guerreroConEspada->atacar() . " y " . $guerreroConEspada->moverse() . "<br>";

    $mago = new Mago();
    echo $mago->atacar() . " y " . $mago->moverse() . "<br>";

    $magoConHechizo = new HechizoDecorator($mago);
    echo $magoConHechizo->atacar() . " y " . $magoConHechizo->moverse() . "<br>";
?>