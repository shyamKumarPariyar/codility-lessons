<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;

class PermCheckSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson02\PermCheck');
    }

    public function it_should_return_1_for_4_1_3_2()
    {
        $this->solution([4, 1, 3, 2])->shouldReturn(1);
    }

    public function it_should_return_0_for_4_1_3()
    {
        $this->solution([4, 1, 3])->shouldReturn(0);
    }
}
