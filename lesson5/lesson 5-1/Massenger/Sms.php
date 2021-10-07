<?php
class Sms extends Decorator {
    public function sentMassege(int $phone){
       return echo 'получатель:' . $phone . $this->massege
    }
}