<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;

class TriangleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\Triangle');
    }

    public function it_should_return_1_for_10_2_5_1_8_20()
    {
        $this->solution([10, 2, 3, 1, 8, 20])->shouldReturn(1);
    }

    public function it_should_return_0_for_10_50_5_1()
    {
        $this->solution([10, 50, 5, 1])->shouldReturn(0);
    }
}
