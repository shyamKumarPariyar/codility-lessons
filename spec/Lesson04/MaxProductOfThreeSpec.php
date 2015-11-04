<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;

class MaxProductOfThreeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\MaxProductOfThree');
    }

    public function it_should_return_60_for_m3_1_2_m2_5_6()
    {
        $this->solution([-3, 1, 2, -2, 5, 6])->shouldReturn(60);
    }

    public function it_should_return_1800_for_1_2_3_4_5_6_7_20_8_9_10()
    {
        $this->solution([1, 2, 3, 4, 5, 6, 7, 20, 8, 9, 10])->shouldReturn(1800);
    }

    public function it_should_return_6_for_1_2_3()
    {
        $this->solution([1, 2, 3])->shouldReturn(6);
    }

    public function it_should_return_6_for_3_2_1()
    {
        $this->solution([3, 2, 1])->shouldReturn(6);
    }
}
