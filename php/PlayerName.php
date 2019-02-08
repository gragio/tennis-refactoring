<?php

class PlayerName
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new \RuntimeException('Invalid player name');
        }

        $this->value = $value;
    }

    public function equalsTo(PlayerName $playerName): bool
    {
        return $this->value === $playerName->value;
    }
}