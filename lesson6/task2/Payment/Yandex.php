<?php
namespace App\Payment;
use App\Contract\IPayment;

class Yandex implements IPayment
{
    public function pay ( $order) {
        return $order->set_status('Yandex платеж принят');
    }
}
