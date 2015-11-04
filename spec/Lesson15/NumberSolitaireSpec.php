<?php

namespace spec\Lesson15;

use PhpSpec\ObjectBehavior;

class NumberSolitaireSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson15\NumberSolitaire');
    }
}
