<?php

namespace spec\Lesson15;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberSolitaireSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson15\NumberSolitaire');
    }
}
