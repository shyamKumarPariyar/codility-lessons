<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FishSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\Fish');
    }

    function it_should_return_2_for_43215_01000()
    {
        $this->solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0])->shouldReturn(2);
    }

    function it_should_return_1_for_21_10()
    {
        $this->solution([2, 1], [1, 0])->shouldReturn(1);
    }

    function it_should_return_1_for_1_0()
    {
        $this->solution([1], [0])->shouldReturn(1);
    }

    function it_should_return_5_for_10126435789_0001011010()
    {
        $this->solution([10, 1, 2, 6, 4, 3, 5, 7, 8, 9], [0, 0, 0, 1, 0, 1, 1, 0, 1, 0])->shouldReturn(5);
    }
}
