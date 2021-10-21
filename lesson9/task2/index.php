<?php

include 'BinarySearch.php';
include 'InterpolationSearch.php';
$array[] = [];

for ($i=0; $i < 1000; $i++) { 
    for ($j=1000; $j < 1500; $j++) { 
        $array[$j]= rand(1, 1000);
    }
    $array[$i]= rand(1, 1000);
}

function array_clones($array) {
    return array_map(function($element) {
        return ((is_array($element))
            ? array_clone($element)
            : ((is_object($element))
                ? clone $element
                : $element
            )
        );
    }, $array);
}

$array2 = array_clones($array);

$array3 = array_clones($array);


function find ($num, $array)
{       
    $count = 0;
    $index_key = '';
    foreach ($array as $key => $value) {
        if ($value === $num) {
            $count ++;
            $index_key .= ' '. $key;
            unset($array[$key]);
        }
    }       
    echo "Удалены индексы " . $index_key . " в коллиестве ". $count . PHP_EOL;
    return $array;
}

// $start = microtime(true);
// find(50 , $array);
// echo "Сортировка из PHP: ".( microtime(true) - $start).PHP_EOL;

// $start = microtime(true);
// binarySearch($array, 50);
// echo "Сортировка из PHP: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
interpolationSearch($array, 50);
echo "Сортировка из PHP: ".( microtime(true) - $start).PHP_EOL;
