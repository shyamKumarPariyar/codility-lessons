<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\CountFactors');
    }

    function it_should_return_8_for_24()
    {
        $this->solution(24)->shouldReturn(8);
    }

    function it_should_return_1_for_1()
    {
        $this->solution(1)->shouldReturn(1);
    }

    function it_should_return_5_for_16()
    {
        $this->solution(16)->shouldReturn(5);
    }

    function it_should_return_9_for_36()
    {
        $this->solution(36)->shouldReturn(9);
    }

    function it_should_return_2_for_41()
    {
        $this->solution(41)->shouldReturn(2);
    }

    function it_should_return_8_for_42()
    {
        $this->solution(42)->shouldReturn(8);
    }

    function it_should_return_7_for_64()
    {
        $this->solution(64)->shouldReturn(7);
    }
}
