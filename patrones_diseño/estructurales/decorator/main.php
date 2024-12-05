<?php
interface ICoffe {
    public function getCost();
    public function getDescription();
}

class SimpleCoffe implements ICoffe {
    public function getCost()
    {
        return 1.25;
    }

    public function getDescription()
    {
        return "Simple coffe";
    }
}

//Decorator base
class CoffeDecorator implements ICoffe {
    protected $coffe;

    public function __construct(ICoffe $coffe)
    {
        $this->coffe = $coffe;
    }

    public function getCost()
    {
        return $this->coffe->getCost();
    }

    public function getDescription()
    {
        return $this->coffe->getDescription();
    }
}

//Decorator concreto
class MilkDecorator extends CoffeDecorator {
    public function getCost()
    {
        return $this->coffe->getCost() + 0.30;
    }

    public function getDescription()
    {
        return $this->coffe->getDescription() . ', milk';
    }
}

//Otro decorator concreto
class SuggarDecorator extends CoffeDecorator {
    public function getCost()
    {
        return $this->coffe->getCost() + 0.15;
    }

    public function getDescription()
    {
        return $this->coffe->getDescription() . ', suggar';
    }
}

class CremoraDecorator extends CoffeDecorator {
    public function getCost()
    {
        return $this->coffe->getCost() + 0.25;
    }

    public function getDescription()
    {
        return $this->coffe->getDescription() . ', cremora';
    }
}


$coffe = new SimpleCoffe();
echo $coffe->getDescription() . ' $' . $coffe->getCost() . PHP_EOL;
echo "<br><br>";

$milkCoffe = new MilkDecorator($coffe);
echo $milkCoffe->getDescription() . ' $' . $milkCoffe->getCost() . PHP_EOL;
echo "<br><br>";

$suggarCoffe = new SuggarDecorator($milkCoffe);
echo $suggarCoffe->getDescription() . ' $' . $suggarCoffe->getCost() . PHP_EOL;
echo "<br><br>";

//cafe simple con leche, azucar y cremora
$cremoraCoffe = new CremoraDecorator($suggarCoffe);
echo $cremoraCoffe->getDescription() . ' $' . $cremoraCoffe->getCost() . PHP_EOL;