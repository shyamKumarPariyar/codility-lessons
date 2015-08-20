<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FrogRiverOneSpec extends ObjectBehavior
{
    function it_should_return_minus_1_for_2_1()
    {
        $this->solution(2, [1])->shouldReturn(-1);
    }

    function it_should_return_0_for_1_1()
    {
        $this->solution(1, [1])->shouldReturn(0);
    }

    function it_should_return_6_for_5_1_3_1_4_2_3_5_4()
    {
        $this->solution(5, [1, 3, 1, 4, 2, 3, 5, 4])->shouldReturn(6);
    }

    function it_should_return_minus_1_for_5_1_3_1_4_2_3_2_4()
    {
        $this->solution(5, [1, 3, 1, 4, 2, 3, 2, 4])->shouldReturn(-1);
    }
}
