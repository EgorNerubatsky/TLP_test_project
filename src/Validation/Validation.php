<?php

namespace src\Validation;

class Validation
{
    private function validateParticipants($participants): void
    {
        if (!is_numeric($participants) || $participants < 0 || $participants > 8) {
            echo "Кількість учасників має бути цілим числом в межах від 0 до 8.\n";
            exit(1);
        }
    }

    private function validateType($type): void
    {
        $validTypes = ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"];
        if (!in_array($type, $validTypes)) {
            echo "Недійсний тип відпочинку. Дозволені значення: " . implode(", ", $validTypes) . ".\n";
            exit(1);
        }
    }

    private function validateSenderType($senderType): void
    {
        $validSenderTypes = ["file", "console"];
        if (!in_array($senderType, $validSenderTypes)) {
            echo "Недійсний тип відправки. Дозволені значення: " . implode(", ", $validSenderTypes) . ".\n";
            exit(1);
        }
    }

    public function validationInspect($participants, $senderType, $type): void
    {

        // Валідація типу відпочинку
        $this->validateType($type);

        // Валідація кількості учасників
        $this->validateParticipants($participants);

        // Валідація типу відправки повідомлення
        $this->validateSenderType($senderType);
    }
}