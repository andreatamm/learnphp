<?php

function sayHello(){
    var_dump('Hello');
}

sayHello();

function sayHelloToMe($name='Nameless'){
    var_dump("Hello $name!");
}

sayHelloToMe('Andrea');
sayHelloToMe('Martin');
sayHelloToMe('Joonas');
sayHelloToMe();

function sayNameAndAge($name, $age){
    var_dump("Your name is $name and you are $age years old!");
}

sayNameAndAge('Andrea', 20);
sayNameAndAge('Martin', 43);

function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}


recursion(0);