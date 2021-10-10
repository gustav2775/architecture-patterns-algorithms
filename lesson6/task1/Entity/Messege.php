<?php

namespace App\Entity;

use App\Contract\Decorator;

class Message extends Decorator
{
    private $text;

    public function __construct ($text)
    {
        $this->text = $text;
    }
    public function notification ($text)
    {
        return $this->text
    }
}
