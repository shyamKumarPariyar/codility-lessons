<?php

namespace spec\Lesson01;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FrogJmpSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson01\FrogJmp');
    }
}
