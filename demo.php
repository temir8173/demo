<?php

$array = [];

$N = 25;
$currentDiagonalRow = 0;
$tempIndex = 0;
for ($i = 1; $i <= $N; $i++) {
    $middleRow = (int)(sqrt($N) - 1);
    $firstIndexOfArray = $currentDiagonalRow <= $middleRow
        ? $currentDiagonalRow - $tempIndex
        : $middleRow - $tempIndex;
    $secIndexOfArray = $currentDiagonalRow <= $middleRow
        ? $tempIndex
        : $currentDiagonalRow - $middleRow + $tempIndex;

    if ($currentDiagonalRow % 2 === 1) {
        $array[$firstIndexOfArray][$secIndexOfArray] = $i;
    } else {
        $array[$secIndexOfArray][$firstIndexOfArray] = $i;
    }
//    var_dump($firstIndexOfArray . " - " . $secIndexOfArray . " - " . $currentDiagonalRow);
//    var_dump($currentDiagonalRow . " - " . $tempIndex . " - " . $middleRow);

    if ($currentDiagonalRow === $tempIndex || $currentDiagonalRow + $tempIndex === 2 * $middleRow) {
        $currentDiagonalRow++;
        $tempIndex = 0;
    } else {
        $tempIndex++;
    }
}
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo PHP_EOL;
}
