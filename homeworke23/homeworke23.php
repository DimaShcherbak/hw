<?php

class Transport{
    public $color, $speed, $brand;
    function info(){
return "color: " .$this->color .PHP_EOL. "max speed:" .$this->speed .PHP_EOL.  "brand: " .$this->brand .PHP_EOL;
    }
}
class Graundtr extends Transport{
    public $wheel, $typegt;
    function info(){
        return parent:: info(). "wheel:" .$this->wheel .PHP_EOL. "type_transport: " .$this->typegt .PHP_EOL;
    }
}
class Car extends Graundtr{
    private $Enginetype;
    public function set_group($Enginetype){
        $this->Enginetype = $Enginetype;
    }

    public function get_group(){
        return $this->Enginetype;
    }

    function info(){
        return parent:: info(). "Enginetype: " .$this->Enginetype .PHP_EOL;
    }
}

$cb =new Car();
$cb->wheel = "yes";
$f = new Graundtr();
$cb->set_group("Gas");
$zz = new Transport();
$cb->color = "white";
$cb->speed = "300";
$cb->brand = "Lotus";
$cb->typegt = "Graund";
echo $cb->info();