<?php

class ViejoMotor{
    public function encenderConLLave(){
        echo "Encendiendo con llave";
    }
}

class CocheModerno{
    public function encenderConBoton(){
        echo "Encendiendo con boton";
    }
}

class AdaptadorMotor{
    private $motor;

    public function __construct(ViejoMotor $motor){
        $this->motor = $motor;
    }

    public function encenderConBoton(){
        $this->motor->encenderConLLave();
    }
}

class Telefono{
    public function encender(AdaptadorMotor $motor){
        $motor->encenderConBoton();
    }
}

$motorViejo= new ViejoMotor();
$adaptador = new AdaptadorMotor($motorViejo);
$telefono = new Telefono();
$telefono->encender($adaptador);