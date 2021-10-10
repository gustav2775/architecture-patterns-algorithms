<?php

namespace App\Entity;

use App\Contract\Decorator;

class Email extends Decorator{
    private $massege;

    public function __construct (string $massege,string $email)
    {
        $this->email = $email;
        $this->massege = $massege;
    }
    public function set_email ($email)
    {
        $this->email = $email;
    }
    public function notification ($email)
    {
        echo 'получатель: ' . $email . $messege
    }
}