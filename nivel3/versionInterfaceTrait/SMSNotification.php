<?php

require_once 'NotifiableInterface.php';
require_once 'SendableInterface.php';

class SMSNotification implements Notifiable, Sendable
{
    protected string $message;
    protected int $phoneNumber;

    public function __construct(string $message, int $phoneNumber)
    {
        $this->setMessage($message);
        $this->phoneNumber = $phoneNumber;
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
        echo "SMS enviado a: $this->phoneNumber - Mensaje: {$this->getMessage()}";
    }
}