<?php declare(strict_types=1);

namespace KataTests;

use Kata\RandomNumberGame;
use PHPUnit\Framework\TestCase;

class RandomNumberGameTest extends TestCase
{
    public function test_try_number(): void
    {
        $game = new RandomNumberGame();

        $result = $game->tryNumber(1);

        self::assertEquals(true, $result);
    }
}
