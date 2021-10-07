<?php 
class Massege implements Decorator {
    protected $massege;
    protected $title;
    protected $sender;
    public function __constructor(string $massege,string $title, string $sender){
        $this->massege = $massege;
        $this->title = $title;
        $this->sender = $sender;
    }
    public function sentMassege(){
        return '<h2>' . $this->title. '</h2> <br />'. $this->sender . '<br /> <p>sender:' . $this->massege . '</p>'
    }
}