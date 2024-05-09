<?php

namespace src\Activity;

use Exception;

class Activity implements ActivityProvider {
    private string $apiUrl = 'https://www.boredapi.com/api/activity';

    // Отримання поради від API

    /**
     * @throws Exception
     */
    public function getAdvice($participants, $type) {
        // Побудова URL
        $url = $this->apiUrl . '?participants=' . $participants . '&type=' . $type;

        // Запит до API
        $response = file_get_contents($url);

        // Перевірка коректності відповідь
        if ($response === false) {
            throw new Exception('Failed to fetch activity from API');
        }

        // Повернення поради для відпочинку
        return json_decode($response, true);
    }
}