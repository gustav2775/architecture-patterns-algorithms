<?php

namespace App\Observer;

use SplObserver;

class HunterObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        $this->subject->notification();
    }
}
