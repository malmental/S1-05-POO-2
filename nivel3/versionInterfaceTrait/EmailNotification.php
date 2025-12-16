<?php

require_once 'NotifiableInterface.php';
require_once 'SendableInterface.php';

class EmailNotification implements Notifiable, Sendable
{
    protected string $message;
    protected string $email;

    public function __construct(string $message, string $email)
    {
        $this->setMessage($message);
        $this->email = $email;
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
        echo "Email enviado a: $this->email - Mensaje: {$this->getMessage()}";
    }
}