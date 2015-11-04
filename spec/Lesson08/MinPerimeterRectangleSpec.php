<?php

namespace spec\Lesson08;

use PhpSpec\ObjectBehavior;

class MinPerimeterRectangleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson08\MinPerimeterRectangle');
    }

    public function it_should_return_22_for_30()
    {
        $this->solution(30)->shouldReturn(22);
    }

    public function it_should_return_4_for_1()
    {
        $this->solution(1)->shouldReturn(4);
    }

    public function it_should_return_24_for_36()
    {
        $this->solution(36)->shouldReturn(24);
    }

    public function it_should_return_40000_for_100000000()
    {
        $this->solution(100000000)->shouldReturn(40000);
    }
}
