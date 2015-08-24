<?php

namespace spec\Lesson09;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountNonDivisibleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson09\CountNonDivisible');
    }
}
