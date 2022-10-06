<?php declare(strict_types=1);

namespace Kata;

class RandomNumberGame
{
    private int $tries = 0;

    public function __construct(private int $randomNumber)
    {
    }

    public function tryNumber(int $number): TryNumberResponse
    {
        $this->tries++;

        if ($number < $this->randomNumber) {
            return new TryNumberResponse('too low', $this->tries);
        }

        if ($number > $this->randomNumber) {
            return new TryNumberResponse('too high', $this->tries);
        }

        return new TryNumberResponse('Won', $this->tries);
    }
}
