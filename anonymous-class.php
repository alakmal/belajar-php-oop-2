<?php

interface HelloWorld
{

    function sayHello(): void;
}


$helloWorld = new class  implements HelloWorld {
    function sayHello(): void
    {
        echo "Hello Anonymous Class" . PHP_EOL;
    }
};

$helloWorld->sayHello();