<?php
include './Search/LinearSearch.php';
include './Search/BinarySearch.php';
include './Search/InterpolationSearch.php';
include './Search/randArray.php';
$findNumber = 5000;

$array = getSortRandArray();

echo "Линейный поиск".PHP_EOL;
echo linearSearch($array, $findNumber).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($array, $findNumber).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($array, $findNumber);

//Бинарный
//Количество итераций: 12 искомого числа 5000 под индексом 1660
//Интерполяционный
//Количество итераций: 2 искомого числа 5000 под индексом 1660