<?php

namespace Rdehnhardt\ExchangeRate;

class Exchange
{
    /**
     * @var Fixer
     */
    private $fixer;

    /**
     * Exchange constructor.
     * @param Fixer $fixer
     */
    public function __construct(Fixer $fixer = null)
    {
        if ($fixer === null) {
            $fixer = new Fixer();
        }

        $this->fixer = $fixer;
    }

    /**
     * @param $amount
     * @param $from
     * @param $to
     * @param null $rate
     * @return int
     * @throws \Rdehnhardt\ExchangeRate\Excaptions\NotFoundException
     */
    public function rate($amount, $from, $to, $rate = null)
    {
        if ($rate === null) {
            $rate = $this->fixer->get($from, $to);
        }

        return $amount * $rate;
    }
}