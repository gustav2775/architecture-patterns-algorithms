<?php
namespace App\Payment;
use App\Contract\IPayment;

class WebMoney implements IPayment
{
    public function pay ($order) {
        return $order->set_status('WebMoney платеж принят');
    }
}