<?php

namespace Data;


abstract class Animal
{
    public string $name;
}


class Cat extends Animal {}

class Dog extends Animal {}

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter
{

    function adopt(string $name): Animal
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}


class CatShelter implements AnimalShelter
{
    function adopt(string $name): Animal
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}