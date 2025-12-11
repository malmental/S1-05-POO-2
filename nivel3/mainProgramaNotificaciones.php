<?php

require_once 'Notificacion.php';
require_once 'notificacionDeEmail.php';
require_once 'notificacionSMS.php';
require_once 'notificacionCorreos.php';

echo "Sistema de Notifiaciones" . PHP_EOL;

// Creamos notificaciones
$notificacionEmail = new notificacionDeEmail(
    "Tu pedido nº 666 se ha enviado al infierno", 
    "belcebu@correocaliente.ex", 
    "Acuse de envio");

$notificacionSMS = new notificacionSMS(
    "Su codigo de verificacion es 333", 
    "0034 123 234 345");

$notificacionCorreos = new notificacionCorreos(
    "Su contrato ha sido renovado",
    "El señor de las moscas Ramirez",
    "Av. Siempre Viva 742", 
    "08033");

$notificacionEmail->enviar();
$notificacionSMS->enviar();
$notificacionCorreos->enviar();

// array de notificaciones
$notificaciones = [
    new notificacionDeEmail("Oferta Especial del Satan", "bongzilla@kmail.ck", "Compre YA!"),
    new notificacionSMS("Tienes mensajes de voz", "123 234 345 45"),
    new notificacionCorreos ("Una Postal de Springfield", "Max Power","Av. Evergreen 232", "08002"),
];

?>