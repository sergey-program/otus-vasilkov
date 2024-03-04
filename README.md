# Краткое описание

Обёртка для  slugify 

# Требования

PHP ~8.0

# Установка

```bash
composer require sergey-vasilkov\otus-vasilkov
```

# Использование

```php
$service = new \Sergey\OtusVasilkov\Application\StringService();
$command = new \Sergey\OtusVasilkov\Infrastructure\StringCommand($service);

$command->run();
```

