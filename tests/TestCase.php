<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Rdehnhardt\ExchangeRate\Fixer;

abstract class TestCase extends PHPUnitTestCase
{
    /**
     * @return Client
     */
    public function client()
    {
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/response.json'))
        ]);

        return new Client(['handler' => HandlerStack::create($mock)]);
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return json_decode($this->client()->get('/')->getBody()->getContents(), true);
    }

    /**
     * @param $from
     * @return Fixer
     */
    public function fixer($from)
    {
        $fixer = new Fixer();
        $fixer->setRates($from, $this->getContent()['rates']);

        return $fixer;
    }
}
