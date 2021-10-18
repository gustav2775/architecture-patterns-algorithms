<?php

declare(strict_types=1);

namespace App\Adapter;

use App\Contract\CircleContract;

class CircleAdapter extends CircleContract{
    protected $adapter;

    public function __construct (Adapter $adapter) {
        $this->adapter = $adapter;
    }
    public function circleArea(int $circumference){
        echo $this->adapter->getCircleArea($circumference);
    }

}