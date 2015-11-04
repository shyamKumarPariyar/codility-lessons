<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;

class FishSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\Fish');
    }

    public function it_should_return_2_for_43215_01000()
    {
        $this->solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0])->shouldReturn(2);
    }

    public function it_should_return_1_for_21_10()
    {
        $this->solution([2, 1], [1, 0])->shouldReturn(1);
    }

    public function it_should_return_1_for_1_0()
    {
        $this->solution([1], [0])->shouldReturn(1);
    }

    public function it_should_return_5_for_10126435789_0001011010()
    {
        $this->solution([10, 1, 2, 6, 4, 3, 5, 7, 8, 9], [0, 0, 0, 1, 0, 1, 1, 0, 1, 0])->shouldReturn(5);
    }
}
