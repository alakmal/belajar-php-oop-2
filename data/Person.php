<?php


class Person {
    var string $name = 'eko';
    var ?string $addres = null;
    var string $country = "Indonesia";
    const AUTHOR = "programmer zaman now";


    public function __construct(string $name, ?string $addres)
    {
        $this->name = $name;
        $this->addres = $addres;
    }

    function info(){

        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function sayHello(?string $name) {
        
        if ( is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        }else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }
}

?>