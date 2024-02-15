<?php

function isFigureInNumber(int $number, int $figure): bool {
    
    if($number == 0 && $figure == 0) return true;

    while($number > 0) {
        if($number % 10 == $figure) return true;
        $number /= 10;
    }
    return false;
}

$number = 1;
$figure = 1;

$msg = "La xifra ".$figure;
if(!isFigureInNumber($number,$figure)) {
    $msg .= " NO";
}
$msg .= " existeix dins del nombre ".$number;

echo $msg.PHP_EOL;

?>