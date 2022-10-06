<?php declare(strict_types=1);

namespace Kata;

class RandomNumberGame
{
    public function __construct(private int $randomNumber)
    {
    }

    public function tryNumber(int $number): array
    {
        if ($number < $this->randomNumber) {
            return ['too low', 1];
        }

        if ($number > $this->randomNumber) {
            return ['too high', 1];
        }

        return ['Won', 1];
    }
}
