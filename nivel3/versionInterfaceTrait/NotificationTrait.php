<?php

trait NotificationTrait
{
    protected string $message;

    public function setMessage (string $message): void
    {
            $this->messae = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}   