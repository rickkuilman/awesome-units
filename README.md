[![Build Status](https://travis-ci.org/rickkuilman/awesome-units.svg?branch=master)](https://travis-ci.org/rickkuilman/awesome-units) [![StyleCI](https://github.styleci.io/repos/199922123/shield?branch=master)](https://github.styleci.io/repos/199922123)

# Awesome Units

Awesome Units is a PHP library for converting everyday (boring..) units to awesome, funny or nerdy units.

## Installation

Require the package using [composer](https://getcomposer.org/):

```bash
composer require rickkuilman/awesome-units
```

## Usage

```php
use \RickKuilman\AwesomeUnits\AwesomeUnit;

$coffeeCups = new AwesomeUnit(10)
   ->liters()
   ->toCoffeeCups();

echo "10 liters is equal to " . $coffeeCups . " cups of coffee!"
// 10 liters is equal to 40 cups of coffee!
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
