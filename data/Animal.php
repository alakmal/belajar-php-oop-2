<?php


namespace Data;

abstract class Animal
{

    public string $name;
    public abstract function run();
}

class Cat extends Animal
{

    public function run()
    {
        echo "Cat {$this->name} is running" . PHP_EOL;
    }
}