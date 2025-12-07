<?php

require_once 'Notificacion.php';
require_once 'notificacionDeEmail.php';
require_once 'notificacionSMS.php';
require_once 'notificacionCorreos.php';

echo "===Sistema de Notifiaciones===" . PHP_EOL;

// Creamos notificaciones
$notifEmail = new notificacionDeEmail(
    "Tu pedido nº 666 se ha enviado al infierno", 
    "belcebu@correocaliente.ex", 
    "Acuse de envio");

$notifSMS = new notificacionSMS(
    "Su codigo de verificacion es 333", 
    "0034 123 234 345");

$notifCorreos = new notificacionCorreos(
    "Su contrato ha sido renovado",
    "El señor de las moscas Ramirez",
    "Av. Siempre Viva 742", 
    "08033");


$notifEmail->enviar();
$notifSMS->enviar();
$notifCorreos->enviar();

// Demostracion de Polimorfismo con un array de notificaciones
echo "" . PHP_EOL;
echo "===Demostracion de Poliformismo===" . PHP_EOL;
echo "" .PHP_EOL;

$notificaciones = [
    new notificacionDeEmail("Oferta Especial del Satan", "bongzilla@kmail.ck", "Compre YA!"),
    new notificacionSMS("Tienes mensajes de voz", "123 234 345 45"),
    new notificacionCorreos ("Una Postal de Springfield", "Max Power","Av. Evergreen 232", "08002"),
];

echo "Enviando: " . count($notificaciones) . " notificaciones de diferentes tipos" . PHP_EOL;

foreach ($notificaciones as $indice=>$notificaciones)
{
    echo "Notificacion: " . ($indice + 1) . PHP_EOL;
    $notificaciones->enviar();
}

