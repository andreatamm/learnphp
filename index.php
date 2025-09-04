<?php
$num = 3;
if($num > 5) {
    var_dump('Bigger then 5');
} elseif ($num >= 5) {
    var_dump('Equal to 5');
} else {
    var_dump('Smaller then 5');
}
$day = (int) date('N', strtotime('05.09.2025'));
var_dump($day);

if($day == 1) {
    var_dump('Esmaspäev');
} else if ($day == 2) {
     var_dump('Teisipäev');
} else if ($day == 3) {
     var_dump('Kolmapäev');
} else if ($day == 4) {
     var_dump('Neljapäev');
} else if ($day == 5) {
     var_dump('Pidupäev');
} else if ($day == 6) {
     var_dump('Pidupäev');
} else if ($day == 7) {
     var_dump('Pühapäev');
} 

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
    case 6:
        var_dump('Pidupäev');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
}