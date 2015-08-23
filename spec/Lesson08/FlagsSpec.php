<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FlagsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\Flags');
    }
}
