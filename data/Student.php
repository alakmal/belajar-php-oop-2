<?php


namespace Data;

class Student
{
    public string $id;
    public string $name;
    public string $value;

    public function __clone()
    {
        unset($this->value);
    }

    public function __toString()
    {
        return "Student id : {$this->id} , name : {$this->name}, value : {$this->value}";
    }
}