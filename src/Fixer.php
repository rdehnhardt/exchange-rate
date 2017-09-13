<?php

namespace Rdehnhardt\ExchangeRate;

use GuzzleHttp\Client;
use Rdehnhardt\ExchangeRate\Excaptions\NotFoundException;

class Fixer
{
    /**
     * @var array
     */
    private $rates;

    /**
     * @param string $from
     * @param string $to
     * @return mixed
     * @throws NotFoundException
     */
    public function get($from, $to)
    {
        $this->getRates($from);

        if (!array_key_exists(strtoupper($to), $this->rates[$from])) {
            throw new NotFoundException("Exchange rate '$to' not found.");
        }

        return $this->rates[$from][strtoupper($to)];
    }

    /**
     * @param string $from
     */
    private function getRates($from)
    {
        if (!$this->rates[$from]) {
            $response = (new Client())->get("http://api.fixer.io/latest?base={$from}");
            $this->rates[$from] = json_decode($response->getBody(), true)['rates'];
        }
    }

    /**
     * @param string $from
     * @param array $rates
     */
    public function setRates($from, $rates)
    {
        $this->rates[$from] = $rates;
    }
}
