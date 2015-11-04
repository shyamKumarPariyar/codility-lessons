<?php

namespace spec\Lesson05;

use PhpSpec\ObjectBehavior;

class BracketsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson05\Brackets');
    }

    public function it_should_return_1_for_empty()
    {
        $this->solution('')->shouldReturn(1);
    }

    public function it_should_return_1_for_llrllrrlrr()
    {
        $this->solution('(()(())())')->shouldReturn(1);
    }

    public function it_should_return_0_for_lrr()
    {
        $this->solution('())')->shouldReturn(0);
    }

    public function it_should_return_0_for_rlrl()
    {
        $this->solution(')()(')->shouldReturn(0);
    }

    public function it_should_return_1_for_2l3l1l1r1l1r3r2r()
    {
        $this->solution('{[()()]}')->shouldReturn(1);
    }

    public function it_should_return_0_for_1l3l1r1l1r3r()
    {
        $this->solution('([)()]')->shouldReturn(0);
    }
}
