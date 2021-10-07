<?php

namespace lesson4\BD;

abstract class Factory
{
    private $config;
    private $bd;
    private $table;

    abstract public function __constructor ($bd,array $config)
    {
        $this->config = $config;
    }

    abstract public function  DBConnection ()
    abstract public function  DBRecrord ()
    abstract public function  DBQueryBuiler ()
}