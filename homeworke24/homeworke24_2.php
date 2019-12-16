<?php


interface water_transport
{
    public function water_transport();
}


abstract class Transport implements water_transport
{
    public $name;
    public $displacement;
    public $year;
    public $power_point;

    public function __construct($name, $displacement, $year, $power_point)
    {
        $this->name = $name;
        $this->displacement = $displacement;
        $this->year = $year;
        $this->power_point = $power_point;
    }
}

class Sailing_ship extends Transport
{
    public function water_transport()
    {
        echo 'New ship launched.' . PHP_EOL;
    }

    public function newShip()
    {
        return 'It is ' . $this->name . $this->power_point  . ' engine, year ' . $this->year . ', displacement is - '
            . $this->displacement .' t' . PHP_EOL;
    }
}

class Liner extends Sailing_ship
{
    public function water_transport()
    {
        echo 'New liner detected.' . PHP_EOL;
    }
}

class Aircraft_carrier extends Liner
{
    public function water_transport()
    {
        echo 'New Aircraft_carrier detected.' . PHP_EOL;
    }
}
class Cruiser extends Aircraft_carrier
{
    public function water_transport()
    {
        echo 'New Cruiser launched.' . PHP_EOL;
    }
}
$sailing_ship = new Sailing_ship('Belem JEAN-FRANCOIS MONIER / AFP', '20000', 1914, ' sail');
$liner = new Liner('Harmony Of The Seas', '12000', 2007, ' Diesel');
$aircraft_carrier = new Aircraft_carrier('USS George H. W. Bush (CVN-77)', '97000', 2006, ' nuclear');
$cruiser = new Cruiser('Avrora','6731', '1881', ' coal');


echo $sailing_ship->water_transport() .$sailing_ship->newShip();
echo $liner->water_transport() .$liner->newShip();
echo $aircraft_carrier->water_transport().$aircraft_carrier->newShip();
echo $cruiser->water_transport() .$cruiser->newShip();
