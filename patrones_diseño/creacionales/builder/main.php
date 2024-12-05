<?php

class Casa{
    private $paredes;
    private $techo;
    private $ventanas;
    private $puertas;
    private $piscina;

    public function setParedes($paredes) {
        $this->paredes = $paredes;
    }

    public function setPuertas($puertas) {
        $this->puertas = $puertas;
    }

    public function setTecho($techo) {
        $this->techo = $techo;
    }

    public function setVentanas($ventanas) {
        $this->ventanas = $ventanas;
    }

    public function setPiscina($piscina) {
        $this->piscina = $piscina;
    }

    public function mostrar() {
        echo "Casa con {$this->paredes} paredes, {$this->puertas} puertas, {$this->techo}, Piscina {$this->piscina}, techo y ventanas {$this->ventanas}";
    }
}

interface IcasaBuilder{
    public function construirParedes();
    public function construirPuertas();
    public function construirVentanas();
    public function construirTecho();
    public function construirPiscina();
    public function obtenerCasa();
}

class CasaConcretaBuilder implements IcasaBuilder{
    private $casa;

    public function __construct() {
        $this->casa = new Casa();
    }

    public function construirParedes()
    {
        $this->casa->setParedes("Lamina");
    }

    public function construirPuertas()
    {
        $this->casa->setPuertas("Madera");
    }

    public function construirVentanas()
    {
        $this->casa->setVentanas("Madera");
    }

    public function construirTecho()
    {
        $this->casa->setTecho("Laminas");
    }

    public function obtenerCasa()
    {
        return $this->casa;
    }

    public function construirPiscina()
    {
        $this->casa->setPiscina("Inflable");
    }
}

class Director{
    private $builder;

    public function setBuilder(IcasaBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function construirCasa(){
        $this->builder->construirParedes();
        $this->builder->construirPuertas();
        $this->builder->construirVentanas();
        $this->builder->construirTecho();
        $this->builder->construirPiscina();
    }
}

$builder = new CasaConcretaBuilder();
$director = new Director();
$director->setBuilder($builder);
$director->construirCasa();

$casa = $builder->obtenerCasa();
$casa->mostrar();