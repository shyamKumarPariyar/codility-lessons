<?php

namespace spec\Lesson03;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GenomicRangeQuerySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson03\GenomicRangeQuery');
    }

    function it_should_return_241_for_CAGCCTA_250_456()
    {
        $this->solution('CAGCCTA', [2, 5, 0], [4, 5, 6])->shouldReturn([2, 4, 1]);
    }
}
