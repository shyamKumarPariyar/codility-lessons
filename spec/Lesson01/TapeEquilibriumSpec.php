<?php

namespace spec\Lesson01;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TapeEquilibriumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson01\TapeEquilibrium');
    }

    function it_should_return_1_for_1_2()
    {
        $this->solution([1,2])->shouldReturn(1);
    }

    function it_should_return_1_for_3_1_2_4_3()
    {
        $this->solution([3, 1, 2, 4, 3])->shouldReturn(1);
    }
}
