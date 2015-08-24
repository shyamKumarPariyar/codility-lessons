<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PeaksSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\Peaks');
    }

    function it_should_return_3_for_1_2_3_4_3_4_1_2_3_4_6_2()
    {
        $this->solution([1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2])->shouldReturn(3);
    }

    function it_should_return_3_for_test()
    {
        $this->solution([1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2,
            3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3,
            1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1])->shouldReturn(4);
    }
}
