[![PHP version](https://img.shields.io/badge/PHP-%3E%3D7-8892BF.svg?style=flat-square)](http://php.net)
[![Latest Version](https://img.shields.io/packagist/v/juliangut/http-exception.svg?style=flat-square)](https://packagist.org/packages/juliangut/http-exception)
[![License](https://img.shields.io/github/license/juliangut/http-exception.svg?style=flat-square)](https://github.com/juliangut/http-exception/blob/master/LICENSE)

[![Build Status](https://img.shields.io/travis/juliangut/http-exception.svg?style=flat-square)](https://travis-ci.org/juliangut/http-exception)
[![Style Check](https://styleci.io/repos/121684874/shield)](https://styleci.io/repos/121684874)
[![Code Quality](https://img.shields.io/scrutinizer/g/juliangut/http-exception.svg?style=flat-square)](https://scrutinizer-ci.com/g/juliangut/http-exception)
[![Code Coverage](https://img.shields.io/coveralls/juliangut/http-exception.svg?style=flat-square)](https://coveralls.io/github/juliangut/http-exception)

[![Total Downloads](https://img.shields.io/packagist/dt/juliangut/http-exception.svg?style=flat-square)](https://packagist.org/packages/juliangut/http-exception/stats)
[![Monthly Downloads](https://img.shields.io/packagist/dm/juliangut/http-exception.svg?style=flat-square)](https://packagist.org/packages/juliangut/http-exception/stats)

# http-exception

HTTP aware exceptions

## Installation

### Composer

```
composer require juliangut/http-exception
```

## Usage

Require composer autoload file

```php
require './vendor/autoload.php';
```

HTTP aware exceptions are just like normal exceptions but carrying an HTTP Status Code

```php
use Jgut\HttpException\HttpException;

$exceptionMessage = 'You shall not pass!';
$exceptionDescription = 'You do not have permission';
$exceptionCode = 1001; // Internal code
$previousException = new \Exception();
$exception = new BadRequestHttpException($exceptionMessage, $exceptionDescription, $exceptionCode, $previousException);

$exception->getStatusCode(); // 400 Bad Request
```

Additionally exceptions have a description and a unique identifier which can be used in logging and displaying for example on APIs, allowing you to have more information over the erroneous situation when addressed

```php
$exception->getDescription();
$exception->getIdentifier();
```

## Contributing

Found a bug or have a feature request? [Please open a new issue](https://github.com/juliangut/http-exception/issues). Have a look at existing issues before.

See file [CONTRIBUTING.md](https://github.com/juliangut/http-exception/blob/master/CONTRIBUTING.md)

## License

See file [LICENSE](https://github.com/juliangut/http-exception/blob/master/LICENSE) included with the source code for a copy of the license terms.
