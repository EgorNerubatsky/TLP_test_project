<?php

namespace src\Sender;

use InvalidArgumentException;

class SenderFactory
{
    public static function createSender(string $type, ?string $filename = null): MessageSender
    {
        switch ($type) {
            case 'console':
                return new ConsoleSender();
            case 'file':
                if ($filename !== null) {
                    return new FileSender($filename);
                } else {
                    throw new InvalidArgumentException('Filename must be provided for file sender.');
                }
            default:
                throw new InvalidArgumentException('Invalid sender type.');
        }
    }
}