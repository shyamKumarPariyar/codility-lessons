<?php

namespace spec\Lesson15;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinAbsSumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson15\MinAbsSum');
    }
}
