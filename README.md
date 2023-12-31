# Laravel Package : Logger

## Installation

Add Repository to composer.json
```
{
    "type": "vcs",
    "url": "https://github.com/Kuvvu/logger.git"
}
```

Install Package
```
composer require kuvvu/logger:dev-main 
```

## Configuration

Update .env
```
LOG_CHANNEL=stack
LOGGER_TOKEN=
``` 

Update logging.php

Add Channel:
```
  'logger' => [
      'driver' => 'custom',
      'formatter' => Monolog\Formatter\JsonFormatter::class,
      'via' => Kuvvu\Logger\Logger::class,
  ],
```

Update Stack:
```
'stack' => [
    'driver' => 'stack',
    'channels' => ['daily', 'logger'],
    'ignore_exceptions' => false,
],
```

Optional Publish config file: 
```
php artisan vendor:publish --tag=logger
```
