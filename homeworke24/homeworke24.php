<?php

    abstract class Animal
    {
        public $food;
        public function food()
        {
            echo 'animal eat';
        }
    }
    class Elephant extends Animal
    {
        public function food()
        {
           echo get_class($this) . ' ' .parent::food() . 'plant' .PHP_EOL;
        }
    }
    class Dragon extends  Animal
    {
        public function food()
        {
            echo get_class($this) . ' '.parent::food() .'human' .PHP_EOL;
        }
    }
    class Dog extends  Animal
    {
        public function food()
        {
            echo get_class($this) . ' ' .parent::food() .'meet' .PHP_EOL;
        }
    }
    $e = new Elephant();
    $d = new Dragon();
    $dog = new Dog();

    echo $e -> food();
    echo $d -> food();
    echo $dog -> food();