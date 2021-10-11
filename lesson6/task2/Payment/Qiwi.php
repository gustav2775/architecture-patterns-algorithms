<?php
namespace App\Payment;
use App\Contract\IPayment;

class Qiwi implements IPayment
{
    public function pay ( $order) {
        return $order->set_status('qiwi платеж принят');
    }
}