<?php


class Person {
    var string $name = 'eko';
    var ?string $addres = null;
    var string $country = "Indonesia";

    function sayHello(?string $name) {
        
        if ( is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        }else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }
}

?>