<?php

namespace app\Personal\Factory;

abstract class Factory
{
    private $config;
    private $bd;

    abstract public function  connected ()
    {
     return $this->bd 
    }
    abstract public function  query (array $params)
}