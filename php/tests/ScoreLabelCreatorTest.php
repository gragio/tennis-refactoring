<?php

class ScoreLabelCreatorTest extends TestMaster
{

    /**
     * @test
     *
     * @param int $score1
     * @param int $score2
     * @param string $expectedLabel
     *
     * @dataProvider data
     */
    public function shouldCreateALabel(int $score1, int $score2, string $expectedLabel)
    {
        $labeCreator = new ScoreLabelCreator();

        $player1 = new Player(new PlayerName('player1'), new Score($score1));
        $player2 = new Player(new PlayerName('player2'), new Score($score2));


        $label = $labeCreator->create($player1, $player2);

        $this->assertEquals($expectedLabel, $label);
    }
}