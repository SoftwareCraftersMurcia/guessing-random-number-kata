<?php
declare(strict_types = 1);

namespace KataTests;

use Kata\RandomNumberGame;
use Kata\TryNumberResponse;
use PHPUnit\Framework\TestCase;

class RandomNumberGameTest extends TestCase
{
    public function test_try_number(): void
    {
        $game = new RandomNumberGame(1);

        $result = $game->tryNumber(1);

        self::assertEquals(new TryNumberResponse('Won', 1), $result);
    }

    public function test_lower_number(): void
    {
        $game = new RandomNumberGame(5);

        $result = $game->tryNumber(1);

        self::assertEquals(new TryNumberResponse('too low', 1), $result);
    }

    public function test_higher_number(): void
    {
        $game = new RandomNumberGame(5);

        $result = $game->tryNumber(6);

        self::assertEquals(new TryNumberResponse('too high', 1), $result);
    }

    public function test_win_in_second_try(): void
    {
        $game = new RandomNumberGame(5);

        $game->tryNumber(6);
        $result = $game->tryNumber(5);

        self::assertEquals(new TryNumberResponse('Won', 2), $result);
    }

    public function test_win_in_third_try(): void
    {
        $game = new RandomNumberGame(5);

        $game->tryNumber(6);
        $game->tryNumber(4);
        $result = $game->tryNumber(5);

        self::assertEquals(new TryNumberResponse('Won', 3), $result);
    }

    public function test_lose_in_third_try(): void
    {
        $game = new RandomNumberGame(5);

        $game->tryNumber(6);
        $game->tryNumber(4);
        $result = $game->tryNumber(7);

        self::assertEquals(new TryNumberResponse('Lose', 3), $result);
    }

    public function test_lose_in_fourth_try(): void
    {
        $this->expectExceptionMessage('Too many tries');

        $game = new RandomNumberGame(5);

        $game->tryNumber(6);
        $game->tryNumber(4);
        $game->tryNumber(4);
        $game->tryNumber(7);
    }
}
