<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;

class NumberOfDiscIntersectionsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\NumberOfDiscIntersections');
    }

    public function it_should_return_11_for_1_5_2_1_4_0()
    {
        $this->solution([1, 5, 2, 1, 4, 0])->shouldReturn(11);
    }
}
