# Silex OAuth2 Server Service Provider

[![Build Status](https://travis-ci.org/euskadi31/OAuth2ServerServiceProvider.svg?branch=master)](https://travis-ci.org/euskadi31/OAuth2ServerServiceProvider)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/2c558cf6-6607-4eba-a1c1-08f60e1d14ae/mini.png)](https://insight.sensiolabs.com/projects/2c558cf6-6607-4eba-a1c1-08f60e1d14ae)


## Install

Add `euskadi31/oauth2-server-service-provider` to your `composer.json`:

    % php composer.phar require euskadi31/oauth2-server-service-provider:~1.0

## Usage

### Configuration

```php
<?php

$app = new Silex\Application;

$app->register(new \Euskadi31\Silex\Provider\OAuth2ServerServiceProvider);
```

## License

OAuth2ServerServiceProvider is licensed under [the MIT license](LICENSE.md).
