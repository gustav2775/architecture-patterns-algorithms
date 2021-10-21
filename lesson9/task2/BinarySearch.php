<?php

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $base = floor(($start + $end) / 2);

        if ($myArray[$base] == $num) {
            echo "Удален элемент с индексом:". $myArray[$base] . PHP_EOL;
            unset($myArray[$base]);
            binarySearch($myArray);
            return $myArray;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
  
    return $myArray;
}
