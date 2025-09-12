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

class MetalBox extends Box {
    public $material = 'Metal';
    public $weightPerUnit = 2;

    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}
class IronBox extends MetalBox {
    public $material = 'Iron';
    public $weightPerUnit = 3;
}

$metalBox = new MetalBox(10, 20, 30);
var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->mass());
