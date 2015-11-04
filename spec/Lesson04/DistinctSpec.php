<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;

class DistinctSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\Distinct');
    }

    public function it_should_return_3_for_2_1_1_2_3_1()
    {
        $this->solution([2, 1, 1, 2, 3, 1])->shouldReturn(3);
    }
}
