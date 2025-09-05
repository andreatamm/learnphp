<?php
var_dump(PHP_INT_MAX);
for($i=0; $i<10; $i++){
    var_dump($i);
}

for($i=10; $i>0; $i--){
    var_dump($i);
}

for($i=1; $i<1_000_000; $i*=2){
    var_dump($i);
}
$current = (int) date("s");

//while($current<59){
//    var_dump($current);
//    $current = (int) date("s");
//}
$i = 10;

while($i<10){
    var_dump('While');
}

do {
    var_dump('Do While');
} while($i<10);

$array = ['Apples', 'Oranges', 'Pears'];

foreach($array as $value) {
    var_dump($value);
}

$array = [
    'name' => 'Andrea',
    'age' => 20,
    'isMale' => false,
];

foreach($array as $key => $value) {
    var_dump($key, $value);
}