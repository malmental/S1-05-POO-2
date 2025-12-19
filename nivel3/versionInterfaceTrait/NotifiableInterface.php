<?php

interface Notifiable 
{
    public function setMessage (string $menssage): void;
    public function getMessage (): string;
}

?>