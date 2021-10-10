<?php

declare(strict_types=1);

namespace App\Contract;

use App\Interfaces\ICircle;

abstract class CircleContract implements ICircle{
    protected $adapter;

    public function __construct ($adapter) {
        $this->adapter = $adapter;
    }

    abstract public function circleArea(int $circumference);
}