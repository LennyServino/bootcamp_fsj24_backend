<?php
    //Colas siguen el principio de primero en entrar, primero en salir
    $arreglo_productos = ['mouse', 'audifonos', 'tablet', 'celular'];

    array_push($arreglo_productos, 'tv', 'laptop');

    //quitar el primer elemento del arreglo
    //shift => quitamos el primer elemento del arreglo

    array_shift($arreglo_productos);

    //clase PHP
    $cola = new SplQueue();
    //agregando elemento a la cola
    $cola->enqueue('Next');
    $cola->enqueue('SpringBoot');
    $cola->enqueue('.net');

    //quitar el elemento (primero)
    $cola->dequeue();
    print_r($cola);
?>