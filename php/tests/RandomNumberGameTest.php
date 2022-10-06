<?php declare(strict_types=1);

namespace KataTests;

use Kata\RandomNumberGame;
use PHPUnit\Framework\TestCase;

class RandomNumberGameTest extends TestCase
{
    public function test_try_number(): void
    {
        $game = new RandomNumberGame(1);

        $result = $game->tryNumber(1);

        self::assertSame('Ok', $result);
    }

    public function test_lower_number(): void
    {
        $game = new RandomNumberGame(5);

        $result = $game->tryNumber(1);

        self::assertSame('too low', $result);
    }
}
