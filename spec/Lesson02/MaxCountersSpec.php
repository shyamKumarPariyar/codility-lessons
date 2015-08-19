<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaxCountersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson02\MaxCounters');
    }
}
