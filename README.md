
В composer.json добавляем в блок require
```json
 "vis/detect_browser_l5": "1.*"
```

Выполняем
```json
composer update
```

Добавляем в app.php в массив providers
```php
    Vis\DetectBrowser\DetectBrowserServiceProvider::class,
```

Публикуем css,icons,view, config
```json
   php artisan vendor:publish --provider="Vis\DetectBrowser\DetectBrowserServiceProvider"
```

Добавляем в app\Http\Kernel.php в переменную $middlewareGroups в массив 'web'
```php
    \Vis\DetectBrowser\Middleware\DetectBrowser::class,
```