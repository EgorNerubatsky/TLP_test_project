<?php

use src\Application;

// Логіка завантаження класів
spl_autoload_register(fn($class) => require_once __DIR__ . '/' . str_replace('\\', '/', $class) . '.php');

// Запуск додатка
$app = new Application();
$app->run();





