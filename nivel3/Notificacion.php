<?php

class Notificacion 
{
    protected string $mensaje;
    protected string $destinatatio;

    public function __construct(string $mensaje, string $destinatatio)
    {
        $this->mensaje = $mensaje;
        $this->destinatatio = $destinatatio;
    }

    // Metodo que sera sobreescrito por todas las class hijas
    public function enviar ()
    {
        echo "Enviando una notificacion 🔔" . PHP_EOL;
    }

    public function getMensaje ()
    {
        return $this->mensaje;
    }

    public function getDestinatario ()
    {
        return $this->destinatatio;
    }
}

?>