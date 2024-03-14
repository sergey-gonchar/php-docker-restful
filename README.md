# RESTful API сервис

## Стек технологий: 
- Ngnix
- Docker/Docker Compose
- Markdown
- PHP
- Laravel, Postgres
---
## Запуск сервиса:
1. Клонировать репозиторий
1. Перейти в папку с проектом и выполнить команду `docker-compose up -d`
1. После создания контейнеров выполнить команду `docker-compose exec php build.sh`
1. Сервис будет доступен по адресу http://localhost:80
---

## Реализованы следующие RESTful API операции:

|  Название                    |HTTP Метод|  Маршрут (URL)      | 
|------------------------------|----------|---------------------|
| Получение списка постов      | `GET`    | `/api/posts`        |
| Получение конкретного поста  | `GET`    | `/api/posts/{post}` |
| Создание поста               | `POST`   | `/api/posts`        |
| Изменение поста              | `PUT`    | `/api/posts/{post}` |
| Удаление поста               | `DELETE` | `/api/posts/{post}` |

Пример структуры создания и изменения поста в формате JSON
```
{
  "title": "Hello World",
  "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
}
```

Пример структуры получения поста в формате JSON
```
{
  "id": 1,
  "title": "Hello World",
  "updated_at": "2020-10-15T07:20:42.000000Z",
  "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
}
```

