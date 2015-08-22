<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DistinctSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\Distinct');
    }

    function it_should_return_3_for_2_1_1_2_3_1()
    {
        $this->solution([2, 1, 1, 2, 3, 1])->shouldReturn(3);
    }
}
