<?php

namespace spec\Lesson03;

use PhpSpec\ObjectBehavior;

class CountDivSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson03\CountDiv');
    }

    public function it_should_return_3_for_6_11_2()
    {
        $this->solution(6, 11, 2)->shouldReturn(3);
    }

    public function it_should_return_2_for_6_11_3()
    {
        $this->solution(6, 11, 3)->shouldReturn(2);
    }

    public function it_should_return_1_for_6_11_4()
    {
        $this->solution(6, 11, 4)->shouldReturn(1);
    }

    public function it_should_return_2_for_6_12_6()
    {
        $this->solution(6, 12, 6)->shouldReturn(2);
    }

    public function it_should_return_1_for_6_11_7()
    {
        $this->solution(6, 11, 7)->shouldReturn(1);
    }

    public function it_should_return_1000000000_for_0_2000000000_2()
    {
        $this->solution(0, 2000000000, 2)->shouldReturn(1000000001);
    }

    public function it_should_return_2000000000_for_1_2000000000_1()
    {
        $this->solution(1, 2000000000, 1)->shouldReturn(2000000000);
    }

    public function it_should_return_1_for_1_1000000000_1()
    {
        $this->solution(1, 1000000000, 1000000000)->shouldReturn(1);
    }

    public function it_should_return_1_for_1_2000000000_2()
    {
        $this->solution(1, 2000000000, 2000000000)->shouldReturn(1);
    }
}
