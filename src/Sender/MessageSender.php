<?php

namespace src\Sender;

interface MessageSender
{
    public function send($message);
}