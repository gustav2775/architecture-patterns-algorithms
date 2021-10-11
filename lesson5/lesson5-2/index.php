<?php

declare(strict_types=1);

namespace App;

use App\Adapter\{CircleAdapter,SquareAdapter};

use App\Libs\{SquareAreaLib,CircleAreaLib};

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^App/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$line = 50;

function getArea ($line) {
    $circleAdapter = new CircleAdapter(new CircleAreaLib());
    $circleAdapter->circleArea($line);
    $squareAdapter = new SquareAdapter(new SquareAreaLib());
    $squareAdapter->squareArea($line);
}

getArea($line);
   