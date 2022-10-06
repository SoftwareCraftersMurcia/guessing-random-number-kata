<?php declare(strict_types=1);

namespace Kata;

use http\Exception\RuntimeException;
use function PHPUnit\Framework\throwException;

class RandomNumberGame
{
    private int $tries = 0;

    public function __construct(private int $randomNumber)
    {
    }

    public function tryNumber(int $number): TryNumberResponse
    {
        $this->tries++;

        if ($this->tries > 3) {
            throw new \RuntimeException('Too many tries');
        }

        if ($this->tries === 3 && $number !== $this->randomNumber) {
            return new TryNumberResponse('Lose', $this->tries);
        }

        if ($number < $this->randomNumber) {
            return new TryNumberResponse('too low', $this->tries);
        }

        if ($number > $this->randomNumber) {
            return new TryNumberResponse('too high', $this->tries);
        }

        return new TryNumberResponse('Won', $this->tries);
    }
}
