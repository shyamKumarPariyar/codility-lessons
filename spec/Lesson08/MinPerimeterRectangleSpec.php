<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinPerimeterRectangleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\MinPerimeterRectangle');
    }
}
