<?php
include './Sort/QuickSort.php';
include './Sort/08QuickSort.php';
include './Sort/06Bubble.php';
include './Sort/randArray.php';
include './Sort/Heapsort.php';
include './Sort/insertSort.php';
include './Sort/PigeonholeSort.php';
include './Sort/MergeSort.php';
include './Sort/InsertSortSPL.php';
include './Sort/HeapSplSort.php';
include './Sort/DualSelectSort.php';
include './Sort/CombSort.php';


$array[] = [];

for ($i=0; $i < 1000; $i++) { 
    $array[]= rand(1, 1000);
}

$lastIndex = count($array) - 1;

$start = microtime(true);
bubbleSort($array);
echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
insertion_sort($array);
echo "Сортировка вставками: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
combSort($array);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

$start = microtime(true);
insertion_sort($array);
echo "Сортировка вставками сорт. массива: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
mergeSort($array);
echo "Сортировка слиянием: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
heapSort($array);
echo "Сортировка пирамидальная: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
treeSort($array);
echo "Сортировка пирамидальная SPL: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
quickSortLesson($array);
echo "Сортировка быстрая наша: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
quickSort($array, 0, $lastIndex);
echo "Сортировка быстрая чужая: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
sort($array);
echo "Сортировка из PHP: ".( microtime(true) - $start).PHP_EOL;


$start = microtime(true);
dualSelectSort($array);
echo "Сортировка выбором: ".( microtime(true) - $start).PHP_EOL;


// $start = microtime(true);
// pigeonholeSort($array);
// echo "Сортировка голубиная: ".( microtime(true) - $start).PHP_EOL;