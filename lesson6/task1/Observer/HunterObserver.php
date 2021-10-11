<?php

namespace App\Observer;

use SplObserver;

class HunterObserver implements SplObserver
{
    public function update(SplSubject $subject,$vacancy_name)
    {
        $this->subject->notification($vacancy_name);
    }
}
