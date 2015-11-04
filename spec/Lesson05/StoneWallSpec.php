<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;

class StoneWallSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\StoneWall');
    }

    public function it_should_return_7_for_8_8_5_7_9_8_7_4_8()
    {
        $this->solution([8, 8, 5, 7, 9, 8, 7, 4, 8])->shouldReturn(7);
    }
}
