<?php

class Box {
    public $height;
    public $width;
    public $lenght;

    public function volume(){
        return $this->height * $this->width * $this->lenght;
    }
}

$box1 = new Box();
$box1->height = 10;
$box1->width = 10;
$box1->lenght = 10;
$volume = $box1->volume();
var_dump($box1);
var_dump($volume);
var_dump($box1->volume());

$box2 = new Box();
$box2->height = 40;
$box2->width = 60;
$box2->lenght = 70;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);
