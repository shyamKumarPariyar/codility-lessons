<?php

namespace spec\Lesson07;

use PhpSpec\ObjectBehavior;

class MaxProfitSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson07\MaxProfit');
    }

    public function it_should_return_356_for_23171_21011_21123_21366_21013_21367()
    {
        $this->solution([23171, 21011, 21123, 21366, 21013, 21367])->shouldReturn(356);
    }

    public function it_should_return_0_for_empty()
    {
        $this->solution([])->shouldReturn(0);
    }
}
