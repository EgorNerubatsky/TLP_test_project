<?php


use src\Application;

spl_autoload_register(function ($class) {
    // Логіка завантаження класів
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Запуск додатка
$app = new Application();
$app->run();





