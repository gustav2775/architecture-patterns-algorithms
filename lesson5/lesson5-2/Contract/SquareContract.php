<?php

declare(strict_types=1);

namespace App\Contract;

use App\Interfaces\ISquare;

abstract class SquareContract implements ISquare {
    protected $adapter;

    public function __construct ($adapter) {
        $this->adapter = $adapter;
    }

    abstract public function squareArea(int $sideSquare);
}