<?php
declare(strict_types = 1);

namespace KataTests;

use Kata\RandomNumberGame;
use PHPUnit\Framework\TestCase;

class RandomNumberGameTest extends TestCase
{
    public function test_try_number(): void
    {
        $game = new RandomNumberGame(1);

        $result = $game->tryNumber(1);

        self::assertSame(['Won', 1], $result);
    }

    public function test_lower_number(): void
    {
        $game = new RandomNumberGame(5);

        $result = $game->tryNumber(1);

        self::assertSame(['too low', 1], $result);
    }

    public function test_higher_number(): void
    {
        $game = new RandomNumberGame(5);

        $result = $game->tryNumber(6);

        self::assertSame(['too high', 1], $result);
    }
}
