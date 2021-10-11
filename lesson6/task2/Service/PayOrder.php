<?php
namespace App\Service;

use App\Entity\Order;

class PayOrder {
    private $payment;

    public function __construct ($payment) {
        $this->payment = $payment;
    }

    public function pay (Order $order) {
        return $this->payment->pay($order);
    }

    public function set_payment ($payment) {
        $this->payment=$payment;
        return $this;
    }
}