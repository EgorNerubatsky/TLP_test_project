<?php

namespace src\Activity;

interface ActivityProvider
{
    public function getAdvice($participants, $type);
}