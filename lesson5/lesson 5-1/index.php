<?php

$user = new User('Вася','vasy@mail.ru',79203452045);
$massege ='привет саша';

new Sms(new Massege($massege,$user));
new Email(new Massege($massege,$user));