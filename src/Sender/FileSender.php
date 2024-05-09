<?php

namespace src\Sender;

class FileSender implements MessageSender
{
    private string $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function send($message): void
    {
        file_put_contents($this->filename, $message . PHP_EOL, FILE_APPEND);
    }
}