<?php

namespace Data;


// contravariance

class Food {}

class AnimalFood extends Food {}


abstract class Animal
{
    public string $name;
    public abstract function run();
    public abstract function eat(AnimalFood $food);
}


class Cat extends Animal


{
    public function run()
    {
        echo "Cat {$this->name} is running";
    }

    public function eat(AnimalFood $food)
    {
        echo "Cat eat " . get_class($food);
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "Dog {$this->name} is running";
    }

    public function eat(AnimalFood $food)
    {
        echo "Dog eat " . get_class($food);
    }
}