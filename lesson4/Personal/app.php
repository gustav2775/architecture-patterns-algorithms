<?php
namespace app;
use app\Personal\BD\BD;
use app\Personal\Entity\{MySQLFactory,OracleFactory,PostgreSQLFactory};

class App {
    public $sql;
    public $oracle;
    public $postgre;

    private static $instance;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
 
        return static::$instance;
    }


    createBD () {
        $sql = new BD(MySQLFactory);
        $oracle = new BD(OracleFactory);
        $postgre = new BD(PostgreSQLFactory);
    }

}

new App()