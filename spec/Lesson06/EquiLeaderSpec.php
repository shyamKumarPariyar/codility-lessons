<?php

namespace spec\Lesson06;

use PhpSpec\ObjectBehavior;

class EquiLeaderSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson06\EquiLeader');
    }

    public function it_should_return_1_for_1()
    {
        $this->solution([1])->shouldReturn(0);
    }

    public function it_should_return_2_for_434442()
    {
        $this->solution([4,3,4,4,4,2])->shouldReturn(2);
    }
}
