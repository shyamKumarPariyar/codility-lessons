<?php

namespace spec\Lesson07;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MaxDoubleSliceSumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson07\MaxDoubleSliceSum');
    }
}
