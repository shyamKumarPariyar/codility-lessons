<?php

namespace spec\Lesson04;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DistinctSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson04\Distinct');
    }
}
