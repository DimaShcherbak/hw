<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});

$sailing_ship = new Sailing_ship('Belem JEAN-FRANCOIS MONIER / AFP', '20000', 1914, ' sail');
$liner = new Liner('Harmony Of The Seas', '12000', 2007, ' Diesel');
$aircraft_carrier = new Aircraft_carrier('USS George H. W. Bush (CVN-77)', '97000', 2006, ' nuclear');
$cruiser = new Cruiser('Avrora','6731', '1881', ' coal');


echo $sailing_ship->water_transport() .$sailing_ship->newShip();
echo $liner->water_transport() .$liner->newShip();
echo $aircraft_carrier->water_transport().$aircraft_carrier->newShip();
echo $cruiser->water_transport() .$cruiser->newShip();
?>