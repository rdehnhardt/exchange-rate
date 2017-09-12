<?php

namespace Tests\ExchangeRate;

use Rdehnhardt\ExchangeRate\Exchange;
use Tests\TestCase;

class ExchangeTest extends TestCase
{
    /**
     * @dataProvider getData
     * @param $from
     * @param $to
     * @param $amount
     * @param $rate
     * @param $expected
     */
    public function testExchangeRate($amount, $from, $to, $rate, $expected)
    {
        $exchange = new Exchange($this->fixer($from));

        $this->assertEquals($expected, $exchange->rate($amount, $from, $to, $rate));
    }

    public function getData()
    {
        return [
            [1, 'EUR', 'AUD', null, 1.4915],
            [1, 'EUR', 'BGN', 1.9558, 1.9558],
            [1, 'EUR', 'BRL', null, 3.7057],
            [1, 'EUR', 'CAD', 1.4477, 1.4477],
            [1, 'EUR', 'CHF', 1.1444, 1.1444],
            [1, 'EUR', 'CNY', 7.8024, 7.8024],
            [1, 'EUR', 'CZK', 26.105, 26.105],
            [1, 'EUR', 'DKK', null, 7.4397],
            [1, 'EUR', 'GBP', 0.89878, 0.89878],
            [1, 'EUR', 'HKD', 9.3235, 9.3235],
            [1, 'EUR', 'HRK', 7.4513, 7.4513],
            [1, 'EUR', 'HUF', 307.11, 307.11],
            [1, 'EUR', 'IDR', null, 15791.0],
            [1, 'EUR', 'ILS', 4.2197, 4.2197],
            [1, 'EUR', 'INR', 76.438, 76.438],
            [1, 'EUR', 'JPY', 130.93, 130.93],
            [1, 'EUR', 'KRW', 1346.0, 1346.0],
            [1, 'EUR', 'MXN', null, 21.214],
            [1, 'EUR', 'MYR', null, 5.0357],
            [1, 'EUR', 'NOK', 9.3593, 9.3593],
            [1, 'EUR', 'NZD', 1.6343, 1.6343],
            [1, 'EUR', 'PHP', null, 60.99],
            [1, 'EUR', 'PLN', 4.2549, 4.2549],
            [1, 'EUR', 'RON', 4.6018, 4.6018],
            [1, 'EUR', 'RUB', 68.384, 68.384],
            [1, 'EUR', 'SEK', null, 9.5705],
            [1, 'EUR', 'SGD', 1.6074, 1.6074],
            [1, 'EUR', 'THB', 39.522, 39.522],
            [1, 'EUR', 'TRY', 4.0948, 4.0948],
            [1, 'EUR', 'USD', 1.1933, 1.1933],
            [1, 'EUR', 'ZAR', null, 15.514],
        ];
    }
}