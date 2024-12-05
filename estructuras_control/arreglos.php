<?php
    //TIPOS DE ARREGLO

    //Arreglo indexado
    $lenguajes = ["JavaScript", "PHP", "Python", "Go"];

    $notas = [2,6,9,10,7];
    $notas[3]; //10

    //print_r($notas);
    echo "<br/>";

    //Arreglos Asociativos (el index ya no existe, exixte clave y valor)
    $pais = [
        "pais" => "El Salvador",
        "poblacion" => 50000,
        "departamentos" => 14
    ];

    $persona = [
        "nombre" => "Lenny",
        "edad" => 24,
        "correo" => "lenny@example.com"
    ];

    $pais["poblacion"]; //50000
    //print_r($pais);

    //Arreglos multidimensionales
    $paises_multi = [
        [
            "pais" => "El Salvador",
            "poblacion" => 50000,
            "departamentos" => 14
        ],
        [
            "pais" => "Honduras",
            "poblacion" => 30500,
            "departamentos" => 12
        ],
        [
            "pais" => "Guatemala",
            "poblacion" => 30500,
            "departamentos" => 13
        ]
    ];

    /* echo "<br/>";
    print_r($paises_multi[1]["departamentos"]); */

    //json_encode = es una funcion que convierte un arreglo el json
    echo json_encode($paises_multi);

    //json_decode = decodifica (convierte un json a un arreglo de PHP)
?>