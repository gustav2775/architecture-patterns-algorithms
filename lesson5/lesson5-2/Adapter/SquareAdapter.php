<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Contract\SquareContract;

class SquareAdapter extends SquareContract {
    protected $adapter;

    public function __constructor ($adapter) {
        $this->adapter = $adapter;
    }
    public function squareArea(int $circumference){
        echo $this->$adapter->getSquareArea($circumference);
    }

}
