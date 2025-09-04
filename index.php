<?php

$bool = true && false;

var_dump($bool);

$bool = true || false;

var_dump($bool);

$bool = !true;

var_dump($bool);

$bool = !false;

var_dump($bool);

$bool = 10 > 5;

var_dump($bool);

$bool = 10 < 5;

var_dump($bool);

$bool = 10 < 10;

var_dump($bool);

$bool = 10 == 10;

var_dump($bool);

$bool = 10 >= 10;

var_dump($bool);

$bool = 10 <= 10;

var_dump($bool);

$bool = 10 == '10'; //true

var_dump($bool);

$bool = 10 === '10'; //false

var_dump($bool);


$bool = 10 != 10;

$bool = 10 !== 10;
        // true
$bool = (true && false || true && !false) && true;
var_dump($bool);