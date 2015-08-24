<?php

namespace spec\Lesson12;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinMaxDivisionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson12\MinMaxDivision');
    }
}
