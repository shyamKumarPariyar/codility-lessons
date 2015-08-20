<?php

namespace spec\Lesson02;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PermCheckSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson02\PermCheck');
    }

    function it_should_return_1_for_4_1_3_2()
    {
        $this->solution([4, 1, 3, 2])->shouldReturn(1);
    }

    function it_should_return_0_for_4_1_3()
    {
        $this->solution([4, 1, 3])->shouldReturn(0);
    }
}
