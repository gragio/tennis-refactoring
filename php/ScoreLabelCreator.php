<?php

class ScoreLabelCreator
{
    private $lablesEqualScore = [
        'Love-All',
        'Fifteen-All',
        'Thirty-All',
    ];

    /**
     * ScoreLabelCreator constructor.
     */
    public function __construct()
    {

    }

    public function create(Player $player1, Player $player2)
    {
        $score1 = $player1->getScore();
        $score2 = $player2->getScore();

        $score = '';
        if ($score1->equalsTo($score2)) {
            $score = $this->lablesEqualScore[$score1->getValue()] ?? 'Deuce';
        } elseif ($score1->getValue() >= 4 || $score2->getValue() >= 4) {
            $minusResult = $score1->getValue() - $score2->getValue();
            if ($minusResult == 1) {
                $score = "Advantage player1";
            } elseif ($minusResult == -1) {
                $score = "Advantage player2";
            } elseif ($minusResult >= 2) {
                $score = "Win for player1";
            } else {
                $score = "Win for player2";
            }
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i === 1) {
                    $tempScore = $score1->getValue();
                } else {
                    $score .= "-";
                    $tempScore = $score2->getValue();
                }
                switch ($tempScore) {
                    case 0:
                        $score .= "Love";
                        break;
                    case 1:
                        $score .= "Fifteen";
                        break;
                    case 2:
                        $score .= "Thirty";
                        break;
                    case 3:
                        $score .= "Forty";
                        break;
                }
            }
        }

        return $score;
    }
}