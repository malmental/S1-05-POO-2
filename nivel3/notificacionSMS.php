<?php

require_once 'Notificacion.php';

class notificacionSMS extends Notificacion
{
    private string $numeroDeTelefono;

    public function __construct(string $mensaje, string $numeroDeTelefono)
    {
        parent::__construct($mensaje, $numeroDeTelefono);
        $this->numeroDeTelefono = $numeroDeTelefono;
    }

    public function enviar()
    {
        echo "" . PHP_EOL;
        echo "Enviado un SMS" . PHP_EOL;
        echo "Numero: " . $this->numeroDeTelefono . PHP_EOL;
        echo "Mensaje: " . $this->mensaje . PHP_EOL;
        echo "SMS enviado correctamente" . PHP_EOL;
    }
}

?>