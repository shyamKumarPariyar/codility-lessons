<?php

namespace spec\Lesson07;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaxSliceSumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson07\MaxSliceSum');
    }

    function it_should_return_5_for_3_2_m6_4_0()
    {
        $this->solution([3, 2, -6, 4, 0])->shouldReturn(5);
    }
}
