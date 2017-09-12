<?php

namespace Tests\ExchangeRate;

use Tests\TestCase;

class FixerTest extends TestCase
{
    /**
     * @dataProvider dataForTests
     * @param $from
     * @param $to
     * @param $expected
     */
    public function testGetExchangeRate($from, $to, $expected)
    {
        $this->assertEquals($expected, $this->fixer($from)->get($from, $to));
    }

    /**
     * @return array
     */
    public function dataForTests()
    {
        $content = $this->getContent();
        $output = [];

        foreach ($content['rates'] as $rate => $amount) {
            $output[] = [$content['base'], $rate, $amount];
        }

        return $output;
    }
}