<?php

namespace spec\Lesson07;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaxProfitSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson07\MaxProfit');
    }

    function it_should_return_356_for_23171_21011_21123_21366_21013_21367()
    {
        $this->solution([23171, 21011, 21123, 21366, 21013, 21367])->shouldReturn(356);
    }

    function it_should_return_0_for_empty()
    {
        $this->solution([])->shouldReturn(0);
    }
}
