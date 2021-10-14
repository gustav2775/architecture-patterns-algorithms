<?php
namespace App;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/App/', '', $className);
    require_once __DIR__ . $className . '.php';
});
