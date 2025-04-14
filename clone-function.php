<?php


require_once "data/Student.php";

use Data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value = 100;


$student2 = clone $student1;

var_dump($student1);
var_dump($student2);

echo "  setekag lakukan perubahan" . PHP_EOL;
$student1->id = "56A";
echo " student 1 id : {$student1->id}, \n 
dan student 2 id : {$student2->id}" . PHP_EOL;