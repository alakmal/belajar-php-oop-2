<?php

namespace Data;

class Manager
{

    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is  Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresient extends Manager
{

    function sayHello(string $name)
    {
        echo "Hi $name, my name is  VP {$this->name}" . PHP_EOL;
    }
}