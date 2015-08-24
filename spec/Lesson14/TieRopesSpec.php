<?php

namespace spec\Lesson14;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TieRopesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson14\TieRopes');
    }
}
