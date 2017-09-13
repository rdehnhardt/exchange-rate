# Exchange Rate

[![License](https://poser.pugx.org/rdehnhardt/exchange-rate/license)](https://packagist.org/packages/rdehnhardt/exchange-rate)
[![Latest Stable Version](https://poser.pugx.org/rdehnhardt/exchange-rate/v/stable)](https://packagist.org/packages/rdehnhardt/exchange-rate)
[![Build Status](https://travis-ci.org/rdehnhardt/exchange-rate.svg?branch=master)](https://travis-ci.org/rdehnhardt/exchange-rate)
[![Total Downloads](https://poser.pugx.org/rdehnhardt/exchange-rate/downloads)](https://packagist.org/packages/rdehnhardt/exchange-rate)

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