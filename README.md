# phergie/phergie-irc-plugin-react-beer

[Phergie](http://github.com/phergie/phergie-irc-bot-react/) plugin for Drink all the beers!.

[![Build Status](https://secure.travis-ci.org/michellesanver/phergie-irc-plugin-BEER.png?branch=master)](http://travis-ci.org/michellesanver/phergie-irc-plugin-BEER)

## Install

The recommended method of installation is [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "phergie/phergie-irc-plugin-react-beer": "dev-master"
    }
}
```

See Phergie documentation for more information on
[installing and enabling plugins](https://github.com/phergie/phergie-irc-bot-react/wiki/Usage#plugins).

## Configuration

```php
return [
    'plugins' => [
        // configuration
        new \Phergie\Irc\Plugin\React\Beer\Plugin([



        ])
    ]
];
```

## Tests

To run the unit test suite:

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
./vendor/bin/phpunit
```

## License

Released under the BSD License. See `LICENSE`.
