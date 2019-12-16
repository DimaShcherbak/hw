<?php

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