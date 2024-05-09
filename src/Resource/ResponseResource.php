<?php

namespace src\Resource;

class ResponseResource
{
    public static function formatResponse(array $adviceData): array
    {
        return [
            'activity' => $adviceData['activity'],
            'type' => $adviceData['type'],
            'participants' => $adviceData['participants'],
            'price' => $adviceData['price'] ?? 0,
            'link' => $adviceData['link'] ?? '',
            'key' => $adviceData['key'] ?? '',
            'accessibility' => $adviceData['accessibility'] ?? 0.7
        ];
    }
}
