<?php


class Person {
    public $name = "";
    private $age;
    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }
}
$p = new Person();
$p->name = "Jane";
//$p->age = 17;
$p->setAge(17);


echo $p->name . "\n";
echo $p->getAge();
