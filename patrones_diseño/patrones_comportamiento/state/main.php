<?php

interface IphoneState {
    public function pressButton();
}

// Estado cuando el telefono esta desbloqueado
class UnlockState implements IphoneState {
    public function pressButton()
    {
        echo "Ejecutando varias funciones <br>";
    }
}

class LowBatteryState implements IphoneState {
    public function pressButton()
    {
        echo "Bateria baja <br>";
    }
}

class LockedState implements IphoneState {
    public function pressButton()
    {
        echo "Pantalla bloqueada <br>";
    }
}

class Phone {
    private $state;

    //inicializamos el estado del telefono
    public function __construct(IphoneState $state)
    {
        $this->state = $state;
    }

    //metodo para presionar el boton
    public function setState(IphoneState $state)
    {
        $this->state = $state;
    }

    public function pressButton()
    {
        $this->state->pressButton();
    }
}

//uso del patron state
$phone = new Phone(new UnlockState());
$phone->pressButton();

$phone->setState(new LockedState());
$phone->pressButton();

$phone->setState(new LowBatteryState());
$phone->pressButton();
