# DockerLaravel

Тестовое задание от компании Салют

```Создайте GET-эндпоинт /api/prices, который возвращает JSON-список товаров (id, title, price).
При передаче параметра currency (RUB, USD, EUR) — возвращайте цену с конвертацией (RUB = 1; USD = 90; EUR = 100) и форматированием ($1.50, €2.00, 1 200 ₽).

Используйте Laravel 8+ и Laravel Resource. Ответ — в формате JSON.
```


# Для запуска бэка:
1. cd backend
2. make get-env
3. composer install --ignore-platform-reqs
4. sudo make up
5. sudo make first-run

# Swagger
    Для генерации Swagger по аннотациям используются библиотеки:
        - zircote/swagger-php
        - doctrine/annotations
    Для запуска генерации выполнить команду:
        - ./vendor/bin/openapi app -o ./resources/swagger/v1/openapi.json
