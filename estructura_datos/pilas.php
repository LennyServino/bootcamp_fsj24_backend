<?php
    //Pilas siguen el principio ultimo en entrar, primero en salir
    $arreglo_productos = ['mouse', 'audifonos', 'tablet', 'celular'];
    
    //agregar un elemento a un arreglo
    array_push($arreglo_productos, 'tv', 'laptop');

    //quitar un elemento del arreglo
    array_pop($arreglo_productos); //laptop

    //clases de PHP
    $pila = new SplStack(); //crear un objeto de tipo pila
    $pila->push('Angular');
    $pila->push('Laravel');
    $pila->push('fastAPI');

    //sacando el ultimo elemento
    $pila->pop(); //fastAPI
?>