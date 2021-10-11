<?php

namespace App\Entity;

use SplSubject;

class User implements SplSubject
{
    private $user_name;
    private $email;
    private $experience;
    private $messenger;

    public function __construct (string $user_name, string $email, float $experience, $messenger)
    {
        $this->user_name = $user_name;
        $this->email = $email;
        $this->experience = $experience;
        $this->messenger = $messenger;
    }

    public function get_email()
    {
       return $this->email;
    }

    public function notification($vacancy_name)
    {
        $this->messenger->set_email($this->email,$vacancy_name)
    }
}
