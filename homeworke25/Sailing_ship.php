<?php

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