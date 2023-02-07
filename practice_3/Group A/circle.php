<?php


class Circle {
    public $radius;
    function setRadius($radius) {
            $this->radius = $radius;
    }
    function area() {
        return $this->radius * $this->radius * M_PI;
    }
}
$c = new Circle();
$c->radius = 20;
$c->setRadius(20);
$res = $c->area();


echo "Area:" .$res;
