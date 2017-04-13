A Laravel package wrapper for ampersa/safebrowsing.

## Installation
Composer
```bash
$ composer require ampersa/safebrowsing-laravel
```

Include the Service Provider and Facade in your `config/app.php`
```php
'providers' => [
    ...
    Ampersa\SafeBrowsing\Laravel\SafeBrowsingServiceProvider::class,
    ...
];
...
'aliases' => [
    ...
    'SafeBrowsing' => Ampersa\SafeBrowsing\Laravel\Facade\SafeBrowsing::class,
    ...
];
```

Now publish the configuration
```bash
$ php artisan vendor:publish --provider="Ampersa\SafeBrowsing\Laravel\SafeBrowsingServiceProvider"
```

Finally, ensure your Google SafeBrowsing API key is set. This can be set within `config/safebrowsing.php` or via the `SAFEBROWSING_API_KEY` environment variable. 

For more information on Google SafeBrowsing API keys, please see https://developers.google.com/safe-browsing/v4/get-started

## Usage  
**Basic Usage**  
```php
use SafeBrowsing;
...
$result = SafeBrowsing::listed('http://ianfette.org/');
// Returns: (bool) true
```

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request
