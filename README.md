Simple packages to show update browser page if user browser is outdated

Execute
```json
    composer require "vis/detect_browser_l5":"1.*"
```

Add provider to providers array in app.php
```php
    Vis\DetectBrowser\DetectBrowserServiceProvider::class,
```

Publish css,icons,view,config
```json
   php artisan vendor:publish --provider="Vis\DetectBrowser\DetectBrowserServiceProvider" --force
```
After publishing view template will be created at resources/views/errors/old_browser.blade.php and can be manually edited if needed.

Add middleware to 'web' array in $middlewareGroups at app\Http\Kernel.php
```php
    \Vis\DetectBrowser\Middleware\DetectBrowser::class,
```
