<?php

namespace spec\Lesson01;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PermMissingElemSpec extends ObjectBehavior
{
    function it_should_return_1_for_empty_array()
    {
        $this->solution([])->shouldReturn(1);
    }

    function it_should_return_2_for_1()
    {
        $this->solution([1])->shouldReturn(2);
    }

    function it_should_return_1_for_2()
    {
        $this->solution([2])->shouldReturn(1);
    }

    function it_should_return_5_for_1_2_3_4()
    {
        $this->solution([1,2,3,4])->shouldReturn(5);
    }

    function it_should_return_1_for_2_3_4()
    {
        $this->solution([2,3,4])->shouldReturn(1);
    }
}
