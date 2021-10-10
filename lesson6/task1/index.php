<?php
namespace App;

use App\Entity\{User,Vacancy,Email,Messege};
use App\Observer\HunterObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/App/', '', $className);
    require_once __DIR__ . $className . '.php';
});
$text = "Появилась вакансия";
$vacancy_name = 'Программист';

$user_1 = new User('Иван Иванов', 15, 'ivan@mail.ru', new Email(new Messege($text,$vacancy_name)));
$user_2 = new User('Екатерина Иванова', 6, 'ekaterina@mail.ru',new Email(new Messege($text,$vacancy_name)));

$vacancy = new Vacancy($vacancy_name);

$observer_programmer_1 = new HunterObserver($user_1);
$observer_programmer_2 = new HunterObserver($user_2);

$vacancy->attach($observer_programmer_1)
$vacancy->attach($observer_programmer_2)

$vacancy->detach($observer_programmer_1)