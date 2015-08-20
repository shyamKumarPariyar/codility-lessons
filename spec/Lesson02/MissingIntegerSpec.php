<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MissingIntegerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson02\MissingInteger');
    }

    function it_should_return_5_for_136412()
    {
        $this->solution([1, 3, 6, 4, 1, 2])->shouldReturn(5);
    }

    function it_should_return_1_for_2()
    {
        $this->solution([2])->shouldReturn(1);
    }

    function it_should_return_2_for_1()
    {
        $this->solution([1])->shouldReturn(2);
    }

    function it_should_return_1_for_0()
    {
        $this->solution([0])->shouldReturn(1);
    }

    function it_should_return_1_for_one_negative()
    {
        $this->solution([-2])->shouldReturn(1);
    }

    function it_should_return_1_for_any_number_of_negative()
    {
        $this->solution([-2, -5, -1, -6])->shouldReturn(1);
    }

    function it_should_return_10_for_123456789()
    {
        $this->solution([1, 2, 3, 4, 5, 6, 7, 8, 9])->shouldReturn(10);
    }

    function it_should_return_7_for_123456789()
    {
        $this->solution([1, 2, 3, 4, 5, 6, 10, 14, 19])->shouldReturn(7);
    }
}
