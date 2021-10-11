<?php

namespace App\Contract;

interface IPayment {
    public function pay ($order);
}