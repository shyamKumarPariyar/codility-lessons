<?php

namespace spec\Lesson06;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EquiLeaderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson06\EquiLeader');
    }
}
