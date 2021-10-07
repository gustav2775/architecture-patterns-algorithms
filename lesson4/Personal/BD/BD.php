<?php

namespace app\BD;

use app\Personal\BD\IBD;

   
class BD implements IBD
{
    private static $instance;
    private $bd;
    private $table_cash;
    private $config;
    private $connected;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
 
        return static::$instance;
    }

    public function __constructor ($bd,array $config)
    {
        $this->bd = new $bd ();
        $this->config = $config;
        $this->connected -> DBConnection();
    }

    public function  DBConnection ()
    {
        $connected = $this->bd->connected($this->config);
    }
    public function  DBRecrord (array $params)
    {
        $sql_string = $this->DBQueryBuiler();
        return $this->table_cash = $this->connected->query($sql_string);
    }
    public function  DBQueryBuiler (array $params)
    {

    }
}
