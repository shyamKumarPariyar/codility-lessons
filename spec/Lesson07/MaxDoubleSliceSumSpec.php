<?php

namespace spec\Lesson07;

use PhpSpec\ObjectBehavior;

class MaxDoubleSliceSumSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson07\MaxDoubleSliceSum');
    }

    public function it_should_return_17_for_326m145m12()
    {
        $this->solution([3, 2, 6, -1, 4, 5, -1, 2])->shouldReturn(17);
    }
}
