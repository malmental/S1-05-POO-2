<?php

require_once 'Notificacion.php';

class notificacionDeEmail extends Notificacion
{
    private string $asunto;

    public function __construct(string $mensaje, string $destinatatio, string $asunto = "Sin asunto")
    {
        parent::__construct($mensaje, $destinatatio);
        $this->asunto = $asunto;
    }

    public function enviar()
    {
        echo "" . PHP_EOL;
        echo "Enviado un e-mail 📩" . PHP_EOL;
        echo "Para: " . $this->destinatatio . PHP_EOL;
        echo "Asunto: " . $this->asunto . PHP_EOL;
        echo "Mensaje: " . $this->mensaje. PHP_EOL;
        echo "E-mail enviado correctamente ✅" . PHP_EOL;
    }
}

?>