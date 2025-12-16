<?php

require_once 'NotifiableInterface.php';
require_once 'SendableInterface.php';

class LetterNotification implements Notifiable, Sendable
{
    protected string $message;
    protected string $adress;

    public function __construct(string $message, string $adress)
    {
        $this->setMessage($message);
        $this->adress = $adress;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function send(): void
    {
        echo "Correo Postal enviado a: $this->adress - Mensaje: {$this->getMessage()}";
    }
}