<?php

namespace spec\Lesson13;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinAbsSumOfTwoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson13\MinAbsSumOfTwo');
    }
}
