# PHP package to perform weight conversions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/albertoroldanq/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/weight-conversions)
[![Tests](https://github.com/albertoroldanq/package-weight-conversion-php/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/albertoroldanq/package-weight-conversion-php/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/albertoroldanq/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/albertoroldanq/weight-conversions)

The PHP framework-agnostic package can perform weight conversions simply and intuitively to convert between various weight units.
## Installation

You can install the package via Composer:

```bash
composer require albertoroldanq/weight-conversions
```

## Usage

```php
$weightConversion = new Albertoroldanq\WeightConversions();
echo $weightConversion->echoPhrase('Hello, Albertoroldanq!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alberto Roldan](https://github.com/albertoroldanq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
