<?php
class Person {
    public $name = "";
    public $gender = "";
}


$p1 = new Person();
$p1->name = "SOK";
$p1->gender = "Male";
echo "P1 info: name ".$p1->name
    ."Gender ".$p1->gender ."<Br>";

$p2 = new Person();
$p2->name = "Makara";
$p2->gender = "Female";
echo "P2 info: name ".$p2->name
    ."Gender ".$p2->gender ."<Br>";

