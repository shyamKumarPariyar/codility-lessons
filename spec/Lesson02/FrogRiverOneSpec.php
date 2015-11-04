<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;

class FrogRiverOneSpec extends ObjectBehavior
{
    public function it_should_return_minus_1_for_2_1()
    {
        $this->solution(2, [1])->shouldReturn(-1);
    }

    public function it_should_return_0_for_1_1()
    {
        $this->solution(1, [1])->shouldReturn(0);
    }

    public function it_should_return_6_for_5_1_3_1_4_2_3_5_4()
    {
        $this->solution(5, [1, 3, 1, 4, 2, 3, 5, 4])->shouldReturn(6);
    }

    public function it_should_return_minus_1_for_5_1_3_1_4_2_3_2_4()
    {
        $this->solution(5, [1, 3, 1, 4, 2, 3, 2, 4])->shouldReturn(-1);
    }
}
