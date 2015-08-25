<?php

namespace spec\Lesson09;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountSemiprimesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson09\CountSemiprimes');
    }

    function it_should_return_10_4_0_for_26_1_4_16_26_10_20()
    {
        $this->solution(26, [1, 4, 16], [26, 10, 20])->shouldReturn([10, 4, 0]);
    }

    function it_should_return_0_0_0_1_for_4_1_2_3_4_1_2_3_4()
    {
        $this->solution(4, [1, 2, 3, 4], [1, 2, 3, 4])->shouldReturn([0, 0, 0, 1]);
    }
}
