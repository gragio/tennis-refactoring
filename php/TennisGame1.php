<?php

class TennisGame1 implements TennisGame
{
    /** @var int */
    private $m_score1 = 0;

    /** @var int */
    private $m_score2 = 0;

    /** @var Player */
    private $player1;

    /** @var Player */
    private $player2;

    public function __construct(string $player1Name, string $player2Name)
    {
        $this->scoreLabelCreator = new ScoreLabelCreator();
        $this->player1 = new Player(new PlayerName($player1Name), new Score(0));
        $this->player2 = new Player(new PlayerName($player2Name), new Score(0));
    }

    public function wonPoint(string $playerName)
    {
        $this->player1->is(new PlayerName($playerName))
            ? $this->player1->score()
            : $this->player2->score()
        ;
    }

    public function getScore()
    {
        return $this->scoreLabelCreator->create($this->player1, $this->player2);
    }
}

