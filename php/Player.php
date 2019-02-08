<?php

class Player
{
    /** @var PlayerName */
    private $name;

    /** @var Score */
    private $score;

    public function __construct(PlayerName $name, Score $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function getName(): PlayerName
    {
        return $this->name;
    }

    public function getScore(): Score
    {
        return $this->score;
    }

    public function score(): void
    {
        $this->score->increment();
    }

    public function is(PlayerName $playerName): bool
    {
        return $this->name->equalsTo($playerName);
    }
}