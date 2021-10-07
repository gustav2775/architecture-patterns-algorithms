<?php
namespace Conract;

class Decorator implements ISentMassege{
    protected $massege;

    public function __constructor(string $text){
        $this->massege = $massege;
    }
}