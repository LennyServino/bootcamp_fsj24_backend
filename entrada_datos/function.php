<?php
    #Capturando la informacion del formulario desde PHP
    //VARIABLES GLOBALES
    $name = $_POST['student'];
    $email = $_POST['email'];
    echo "<h1>EJECUTANDO DESDE LA FUNCION</h1>";
    echo "Estudiante FSJ24 <br>Nombre: $name <br>Correo: $email";
?>