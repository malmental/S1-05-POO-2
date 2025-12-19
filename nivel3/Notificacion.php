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

    public function enviar ()
    {
        echo "Enviando una notificacion \m/" . PHP_EOL;
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