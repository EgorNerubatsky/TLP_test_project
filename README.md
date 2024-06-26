
# Радник відпочинку 0.0.1

Додаток рандомно радить відпочинок за бажаною кількістю учасників та 
вказаним типом відпочинку і відправляє пораду декількома можливими способами.

## Вимоги

- Мова програмування: PHP 8.2 або вище

## Встановлення

1. Клонуємо репозиторій із GitHub
```
git clone https://github.com/EgorNerubatsky/TLP_test_project.git
```
2. Якщо не встановлено PHP, встановлюємо командою

```
sudo apt install php8.2-cli
```
3. Перевірка установки PHP
```
php -v
```

## Використання

Запуск скрипта повинен відбуватися через консоль з прийняттям трьох параметрів:
- кількість учасників (значення в діапазоні 0 - 8)
- тип відпочинку (education, recreational, social, diy, charity, cooking, relaxation, music, busywork)
- спосіб відправки повідомлення file, console).

Якщо обрано спосіб відправки повідомлення як "file", файл завантажується до корінної папки проекту

## Приклад запуску скрипта

```
php index.php 5 social console
```
## Приклад відповіді
```
{
    "activity": "Play basketball with a group of friends",
    "type": "social",
    "participants": 5,
    "price": 0,
    "link": "",
    "key": "8683473",
    "accessibility": 0.7
}
```


