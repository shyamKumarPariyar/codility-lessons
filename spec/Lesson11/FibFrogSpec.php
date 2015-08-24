<?php

namespace spec\Lesson11;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibFrogSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson11\FibFrog');
    }
}
