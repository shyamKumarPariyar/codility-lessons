<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NestingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\Nesting');
    }

    function it_should_return_1_for_empty()
    {
        $this->solution('')->shouldReturn(1);
    }

    function it_should_return_1_for_llrllrrlrr()
    {
        $this->solution('(()(())())')->shouldReturn(1);
    }

    function it_should_return_0_for_lrr()
    {
        $this->solution('())')->shouldReturn(0);
    }

    function it_should_return_0_for_rlrl()
    {
        $this->solution(')()(')->shouldReturn(0);
    }
}
