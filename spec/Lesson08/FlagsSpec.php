<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;

class FlagsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\Flags');
    }

    public function it_should_return_3_for_153434123462()
    {
        $this->solution([1, 5, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2])->shouldReturn(3);
    }
}
