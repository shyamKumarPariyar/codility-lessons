<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BracketsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\Brackets');
    }
}
