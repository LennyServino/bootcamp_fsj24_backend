<?php
    /* 
    Crear un programa que contenga dos personajes: "Esqueleto" y "Zombi". Cada personaje tendrá una lógica diferente en sus ataques y velocidad. La creación de los personajes dependerá del nivel del juego:

    - En el nivel fácil se creará un personaje "Esqueleto".

    - En el nivel difícil se creará un personaje "Zombi".
    Debes aplicar el patrón de diseño Factory para la creación de los personajes. 
    */

    interface Personaje {
        public function atacar();
        public function moverse();
    }

    class Esqueleto implements Personaje {
        public function atacar() {
            echo "El esqueleto ataca con una espada";
        }

        public function moverse() {
            echo "El esqueleto se mueve lentamente";
        }
    }

    class Zombi implements Personaje {
        public function atacar() {
            echo "El zombi ataca con sus manos";
        }

        public function moverse() {
            echo "El zombi se mueve lentamente";
        }
    }

    class PersonajeFactory {
        public static function crearPersonaje($nivel) : Personaje {
            return match ($nivel) {
                'facil' => new Esqueleto(),
                'dificil' => new Zombi(),
                default => throw new Exception("Nivel no soportado")
            };
        }
    }

    try {
        $personaje1 = PersonajeFactory::crearPersonaje('facil');
        $personaje1->atacar();
        $personaje1->moverse();

        $personaje2 = PersonajeFactory::crearPersonaje('dificil');
        $personaje2->atacar();
        $personaje2->moverse();

        $personaje3 = PersonajeFactory::crearPersonaje('medio');
        $personaje3->atacar();
        $personaje3->moverse();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>