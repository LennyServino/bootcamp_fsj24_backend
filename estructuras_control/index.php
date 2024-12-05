<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a PHP</h1>
    <?php
        //utilizando echo para imprimir en pantalla
        echo "<strong>Sintaxis de PHP</strong>";

        echo "<p>Inyectando HTML, desde PHP</p>";

        #TIPOS DE DATOS
        //asignando una variable
        $titulo = "PHP"; //string
        $int = 45; //integer
        $decimales = 67.8; //float
        $boolean = true; //boolean
        $boolean2 = FALSE; //boolean mayuscula

        //constantes
        define('PI', 3.1416);
        echo PI;
        echo "<br>";

        const DUI = "12345678-9";
        
        //concatenar
        echo "Numero de indentidad ".DUI;

        //otra forma de concatenar
        echo "<h2>Estamos viendo $titulo</h2>";

        //arreglos
        $frutas = ["manzanas", "peras", "uvas", "naranjas"];
        $verduras = array("tomates", "zanahorias", "cebollas");

        echo "accediendo a una fruta: $frutas[0]";

        /*
            NOTA: echo no imprime arreglos y objetos
         */
        echo "<br />";

        //devuelve el valor del arreglo o la variable
        print_r($verduras);

        echo "<br />";
        var_dump($verduras);
        echo "<br />";

        //objetos: es la identidad donde reflejamos clave y valor
        //Para los objetos se necesitan clases y POO

        //Clase std que te proporciona PHP
        $animal = new stdClass();
        $animal->nombre = "Pancho";
        $animal->especie = "Felino";
        var_dump($animal);


        //clases
        class Persona {
            public $nombre;
            public $apellido;
            public $edad;
            public $telefono;
        }

        //objeto de la clase de persona
        $persona = new Persona();
        $persona->nombre = "Lenny";
        $persona->apellido = "Servino";
        $persona->edad = 24;
        $persona->telefono = 55531534;

    ?>
    <script>
        //objeto en JS
        let persona = {
            nombre: "Lenny",
            apellido: "Servino",
            edad: 24,
            telefono: 55531534
        }
    </script>
</body>
</html>