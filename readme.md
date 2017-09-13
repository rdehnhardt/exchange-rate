# Exchange Rate

[![Author](http://img.shields.io/badge/author-@renatoden-blue.svg?style=flat-square)](https://twitter.com/renatoden)
[![Latest Version](https://img.shields.io/github/release/rdehnhardt/exchange-rate.svg?style=flat-square)](https://github.com/rdehnhardt/exchange-rate/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/rdehnhardt/exchange-rate/master.svg?style=flat-square)](https://travis-ci.org/rdehnhardt/exchange-rate)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/rdehnhardt/exchange-rate.svg?style=flat-square)](https://scrutinizer-ci.com/g/rdehnhardt/exchange-rate/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/rdehnhardt/exchange-rate.svg?style=flat-square)](https://scrutinizer-ci.com/g/rdehnhardt/exchange-rate)
[![Total Downloads](https://img.shields.io/packagist/dt/rdehnhardt/exchange-rate.svg?style=flat-square)](https://packagist.org/packages/rdehnhardt/exchange-rate)

Performs currency conversion automatically based on api fixer.io

### Instalation

```
composer require rdehnhardt/exchange-rate
```

### How to use (automatically)
```
use Rdehnhardt\ExchangeRate\Exchange;

$exchange = new Exchange();
$exchange->rate(10, 'EUR', 'USD'); // 11,933 - at 2017-09-12
```

### How to use (manually)
```
use Rdehnhardt\ExchangeRate\Exchange;

$exchange = new Exchange();
$exchange->rate(10, 'EUR', 'USD', 1.2987); // 12,987
```