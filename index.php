<?php

function isFigureInNumber(int $number, int $figure): bool {
    while($number > 0) {
        if($number % 10 == $figure) return true;
        $number /= 10;
    }
    return false;
}

$number = 3772341;
$figure = 7;

$msg = "La xifra ".$figure;
if(!isFigureInNumber($number,$figure)) {
    $msg .= " NO";
}
$msg .= " existeix dins del nombre ".$number;

echo $msg.PHP_EOL;

?>