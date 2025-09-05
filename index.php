<?php

class Box {
    public $height = 0;
    private $width = 0;
    public $length = 0;

    public function __construct($height=0, $width=0, $length=0){
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function setWidth($width){
        if(is_numeric($width) && $width > 0){
        $this->width = $width;
        } else {
            throw new Exeption('Width needs to be number and bigger than 0');
        }
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

$box1 = new Box(10, 10, 10);
$box1->setWidth(20);
$volume = $box1->volume();
var_dump($box1);
var_dump($volume);
var_dump($box1->volume());

$box2 = new Box(40, 60, 70);
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);
