<?php


class Person {
    var string $name;
    var ?string $addres = null;
    var string $country = "Indonesia";

    function sayHello(string $name) {
        echo " Hello $name" . PHP_EOL;
    }
}

?>