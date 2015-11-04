<?php

namespace spec\Lesson03;

use PhpSpec\ObjectBehavior;

class PassingCarsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson03\PassingCars');
    }

    public function it_should_return_5_for_01011()
    {
        $this->solution([0, 1, 0, 1, 1])->shouldReturn(5);
    }

    public function it_should_return_5_for_010110()
    {
        $this->solution([0, 1, 0, 1, 1, 0])->shouldReturn(5);
    }

    public function it_should_return_8_for_0101101()
    {
        $this->solution([0, 1, 0, 1, 1, 0, 1])->shouldReturn(8);
    }
}
