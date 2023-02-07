<?php


class Person {
    public $name = "SOK";
    public $gender = "MALE";
}


$p1 = new Person();
$p1->name = "Jane";
$p1->gender = "Male";

echo  "<HR>P1 Info:<BR>";
echo "P1 Name: " .$p1->name ."<br>";
echo "P1 Gender: " .$p1->gender;

echo  "<HR>P2 Info:<BR>";

$p2 = new Person();
$p2->name="SOKSAN";
$p2->gender="Female";
echo "P2 Name: " .$p2->name ."<br>";
echo "P2 Gender: " .$p2->gender;

echo  "<HR>P3 Info:<BR>";

$p3 = new Person();
echo "P3 Name: " .$p3->name ."<br>";
echo "P3 Gender: " .$p3->gender;
