<?php
class Calculadora{
    public static $c;
    public $d;

    public static function sumar($a, $b){
        //llamando un atrubuto estatico
        
        return $a + $b + self::$c;
    }

    public static function restar($a, $b){
        return $a - $b;
    }
}

#crear una instancia de la clase
/* $calculadora = new Calculadora();
echo $calculadora->sumar(110,5);
echo "<br>"; */

#Llamando al metodo estatico
echo Calculadora::sumar(110,5);
echo "<br>";
echo Calculadora::sumar(10,300);
echo "<br>";
echo Calculadora::restar(5, 10);
?>