<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StoneWallSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\StoneWall');
    }
}
