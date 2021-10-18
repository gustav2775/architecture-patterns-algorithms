<?php

namespace Conract;

abstract class Decorator implements ISentMassege{
    protected $massege;

    public function __construct(string $text){
        $this->massege = $massege;
    }
    abstract public function sentMassege();
}