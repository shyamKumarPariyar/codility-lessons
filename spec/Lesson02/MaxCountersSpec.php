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

    function it_should_return_32242_for_5_3446144()
    {
        $this->solution(5, [3, 4, 4, 6, 1, 4, 4])->shouldReturn([3, 2, 2, 4, 2]);
    }
}
