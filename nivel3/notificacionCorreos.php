<?php

require_once 'Notificacion.php';

class notificacionCorreos extends Notificacion
{
    private string $direccionPostal;
    private string $codigoPostal;

    public function __construct(string $mensaje, string $destinatatio, string $direccionPostal, string $codigoPostal)
    {
        parent::__construct($mensaje, $destinatatio);
        $this->direccionPostal = $direccionPostal;
        $this->codigoPostal = $codigoPostal;
    }

    public function enviar()
    {
        echo "" . PHP_EOL;
        echo "Enviando un correo ordinario 📭" . PHP_EOL;
        echo "Destinatario: " . $this->destinatatio . PHP_EOL;
        echo "Direccion: " . $this->direccionPostal . PHP_EOL;
        echo "Codigo postal: " . $this->codigoPostal . PHP_EOL;
        echo "Mensaje: " . $this->mensaje . PHP_EOL;
        echo "Correo ordinario enviado exitosamente, a ver si le llega ... 📫" . PHP_EOL;
    }
}

?>
