<?php

namespace spec\Lesson11;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LadderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson11\Ladder');
    }
}
