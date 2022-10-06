<?php declare(strict_types=1);

namespace Kata;

class RandomNumberGame
{
    public function __construct(private int $randomNumber)
    {
    }

    public function tryNumber(int $number): TryNumberResponse
    {
        if ($number < $this->randomNumber) {
            return new TryNumberResponse('too low', 1);
        }

        if ($number > $this->randomNumber) {
            return new TryNumberResponse('too high', 1);
        }

        return new TryNumberResponse('Won', 1);
    }
}
