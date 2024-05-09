<?php

namespace src\Sender;

class ConsoleSender implements MessageSender {
    public function send($message): void
    {
        echo $message . PHP_EOL;
    }
}