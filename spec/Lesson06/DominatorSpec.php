<?php

namespace spec\Lesson06;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DominatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson06\Dominator');
    }

    function it_should_return_0_for_34323m133()
    {
        $this->solution([3, 4, 3, 2, 3, -1, 3, 3])->shouldReturn(0);
    }

    function it_should_return_m1_for_11223344555()
    {
        $this->solution([1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 5])->shouldReturn(-1);
    }

    function it_should_return_m1_for_empty()
    {
        $this->solution([])->shouldReturn(-1);
    }

    function it_should_return_0_for_1()
    {
        $this->solution([1])->shouldReturn(0);
    }
}
