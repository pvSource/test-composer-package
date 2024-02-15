# Обертка DateTime
Расширение возможностей \DateTime

## Требования

- PHP 8

## Установка

```bash
composer require pavelsergeevich\test-composer-package
```

## Использование 
```php
$dateTimeFirst = new CustomDateTime();
$dateTimeSecond = new CustomDateTime('29.10.2022');
$isDateTimeFirstOlder = $dateTimeFirst->isOlder($dateTimeSecond);
```