# Exchange Rate

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