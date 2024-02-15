<?php

function isFigureInNumber(int $number, int $figure): bool {
    
    if($number == 0 && $figure == 0) return true;

    while($number > 0) {
        if($number % 10 == $figure) return true;
        $number /= 10;
    }
    return false;
}

$number = readline("Introdueix un nombre ");
$figure = readline("Introdueix la xifra a buscar ");
//TODO: Think what could be wrong with that input. Not a number, figure bigger than 9...
while($number != "" && $figure != "") {
    $msg = "La xifra ".$figure;
    if(!isFigureInNumber($number,$figure)) {
        $msg .= " NO";
    }
    $msg .= " existeix dins del nombre ".$number;
    echo $msg.PHP_EOL;

    $number = readline("Introdueix un nombre ");    
    $figure = readline("Introdueix la xifra a buscar ");
}


?>