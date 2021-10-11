<?php
namespace App;
use App\Entity\Order;
use App\Service\PayOrder;
use App\Payment\{Qiwi,WebMoney,Yandex};

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/App/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$order = new Order(1, 2500, 78008008800 ,'2021-10-10', 'Не оплачен');
$order->get_inf_order();

$pay_order = new PayOrder($order);

$pay_order->set_payment(new Yandex())->pay($order);
$order->get_inf_order();


$pay_order->set_payment(new Qiwi())->pay($order);
$order->get_inf_order();


$pay_order->set_payment(new WebMoney())->pay($order);
$order->get_inf_order();
