<?php declare(strict_types=1);

namespace Kata;

class RandomNumberGame
{
    public function __construct(private int $randomNumber)
    {
    }

    public function tryNumber(int $number): string
    {
        if ($number < $this->randomNumber) {
            return 'too low';
        }

        if ($number > $this->randomNumber) {
            return 'too high';
        }

        return 'Ok';
    }
}
