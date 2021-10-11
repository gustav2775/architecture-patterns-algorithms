<?php

namespace Conract;

abstract class Decorator implements ISentMassege{
    protected $massege;

    public function __constructor(string $text){
        $this->massege = $massege;
    }
    abstract public function notification();
}