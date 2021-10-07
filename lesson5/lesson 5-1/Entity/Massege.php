<?php 
class Massege implements Decorator {
    protected $massege;
    protected $title;
    protected $sender;
    public function __constructor(string $title, string $massege, string $sender){
        $this->title = $title;
        $this->massege = $massege;
        $this->sender = $sender;
    }
    public function sentMassege(){
        return '<p>sender:' . $this->sender . '</p> <br /> <h2>' . $this->title . '</h2> <br />' . $this->massege . '</p>'
    }
}