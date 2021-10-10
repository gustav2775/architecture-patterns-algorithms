<?php

namespace App\Entity;

class Vacancy
{
    private $observer;
    private $vacancy_name;
    
    public function __construct(string $vacancy_name)
    {
        $this->vacancy_name =$vacancy_name;
    }
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
 
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
 
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
