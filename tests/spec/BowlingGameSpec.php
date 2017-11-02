<?php namespace spec;

use BowlingGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior {

    // Specs
    // - 10 frames
    // - 1 or 2 shots
    // - Spares
    //      - 5
    //      - 5 //spare
    //      - 7 // 24
    // - Strike
    //      -10
    //      - 2
    //      - 4 // 22

    function it_scores_gutter_game_as_zero()
    {
        for ($i=0; $i<20; $i++)
        {
            $this->roll(0);
        }

        $this->score()->shouldBe(0);
    }
}
