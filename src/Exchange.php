<?php

namespace Rdehnhardt\ExchangeRate;

use Rdehnhardt\ExchangeRate\Excaptions\NotFoundException;

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
    public function __construct(Fixer $fixer)
    {
        $this->fixer = $fixer;
    }

    /**
     * @param $amount
     * @param $from
     * @param $to
     * @param null $rate
     * @return int
     * @throws NotFoundException
     */
    public function rate($amount, $from, $to, $rate = null)
    {
        if ($rate === null) {
            $rate = $this->fixer->get($from, $to);
        }

        return $amount * $rate;
    }
}
