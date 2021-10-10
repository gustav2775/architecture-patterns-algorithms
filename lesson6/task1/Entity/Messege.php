<?php

namespace App\Entity;

use App\Contract\Decorator;

class Message extends Decorator
{
    private $user_1;
    private $text;
    private $vacancy_name;

    public function __construct ($user,$text,$vacancy_name)
    {
        $this->user = $user;
        $this->text = $text;
        $this->vacancy_name = $vacancy_name;
    }
    public function notification ($text)
    {
        return $this->text . $this->vacancy_name
    }
}
