<?php
namespace src;

use Exception;
use src\Activity\Activity;
use src\Resource\ResponseResource;
use src\Sender\SenderFactory;
use src\Validation\Validation;


class Application
{
    public function run(): void
    {
        try {
            // Отримання вхідних параметрів з консолі та обробка виключень
            [$participants, $type, $senderType] = $this->getCommandLineArguments();

            // Створення об'єкту Activity
            $activity = new Activity();

            // Отримання параметрів від API
            $adviceData = $activity->getAdvice($participants, $type);

            // Формування відповіді
            $response = ResponseResource::formatResponse($adviceData);

            $filename = null;
            if ($senderType == 'file') {
                $filename = sprintf('%s_%s_%s.txt', $type, date('Y-m-d'), date('H-i'));
            }

            // Відправка відповіді в залежності від вибраного типу відправки
            $sender = SenderFactory::createSender($senderType, $filename);
            $sender->send(json_encode($response, JSON_PRETTY_PRINT));
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    private function getCommandLineArguments(): array
    {
        global $argv;

        $participants = $argv[1] ?? 1;
        $type = $argv[2] ?? 'recreational';
        $senderType = $argv[3] ?? 'console';

        $validator = new Validation();
        $validator->validationInspect($participants, $senderType, $type);

        return [$participants, $type, $senderType];
    }
}
