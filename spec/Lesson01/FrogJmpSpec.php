<?php

namespace spec\Lesson01;

use PhpSpec\ObjectBehavior;

class FrogJmpSpec extends ObjectBehavior
{
    public function it_should_return_0_for_20_20_10()
    {
        $this->solution(20, 20, 10)->shouldReturn(0);
    }

    public function it_should_return_1_for_20_25_5()
    {
        $this->solution(20, 25, 5)->shouldReturn(1);
    }

    public function it_should_return_1_for_20_25_10()
    {
        $this->solution(20, 25, 10)->shouldReturn(1);
    }

    public function it_should_return_1_for_10_85_30()
    {
        $this->solution(10, 85, 30)->shouldReturn(3);
    }
}
