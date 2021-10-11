<?php
namespace App\Entity;

class Order
{
    private $id;
    private $price;
    private $phone_number;
    private $date_create;
    private $status;


    public function __construct (int $id, float $price, float $phone_number ,string $date_create,string $status) {
        $this->id = $id;
        $this->price = $price;
        $this->phone_number= $phone_number;
        $this->date_create = $date_create;
        $this->status = $status;
    }

    public function set_status (string $value) {
        $this->status = $value;
    }

    public function get_inf_order () {
        echo  'Номер заказ '.$this->id .' от ' .$this->date_create  .' сумма заказа ' .$this->price. ' статус заказ  '.$this->status.'
';
    }
}