<?php

$user = new User('Вася','vasy@mail.ru',79203452045);
$massege = 'привет саша';
$title = 'Приветственное письмо';

$sms = new Sms(new Massege($title,$massege,$user));
$email = new Email(new Massege($title,$massege,$user));

$sms->sentMassege();
$email->sentMassege();