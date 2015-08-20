<?php

namespace spec\Lesson03;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinAvgTwoSliceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson03\MinAvgTwoSlice');
    }

    function it_should_return_1_for_4225158()
    {
        $this->solution([4,2,2,5,1,5,8])->shouldReturn(1);
    }
}
