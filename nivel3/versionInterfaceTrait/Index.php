<?php

require_once 'EmailNotification.php';
require_once 'LetterNotification.php';
require_once 'SMSNotification.php';

$notifications = [
    new EmailNotification("Terminaste la refactorización!!", "orojas@php.net"),
    new SMSNotification("Terminaste la refactorización!!", 634653926),
    new LetterNotification("Terminaste la refactorización!!", "Calle Siempreviva 67"),
];

foreach ($notifications as $notification) {
    echo $notification->send() . PHP_EOL;
}