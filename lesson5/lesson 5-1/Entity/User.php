<?php 
class User implements Decorator {
    protected $user_name;
    protected $email;
    protected $phone_number;
    public function __construct(string $user_name, string $email, int $phone_number){
        $this->user_name = $user_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }
    public function __get (string $name_props) {
        if (array_key_exists($name_props, $this)) {
            return $this->$name_props;
        }
    }
    public function sentMassege(){
        return `<p>sender:` . $this->user_name 'email:' $this->email 'phone:' . $this->phone_number . '</p>'
    }
}