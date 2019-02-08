<?php

class Score
{
    /** @var int */
    private $value;


    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new RuntimeException('Invalid score');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }


    public function increment(): void
    {
        $this->value++;
    }

    public function equalsTo(Score $score):bool
    {
        return $this->value === $score->value;
    }
}