<?php

declare(strict_types = 1);

namespace Kata;

final class TryNumberResponse
{
    private string $currentStatus;
    private int $tries;

    public function __construct(string $currentStatus, int $tries)
    {
        $this->currentStatus = $currentStatus;
        $this->tries = $tries;
    }

    public function currentStatus(): string
    {
        return $this->currentStatus;
    }

    public function tries(): int
    {
        return $this->tries;
    }
}
