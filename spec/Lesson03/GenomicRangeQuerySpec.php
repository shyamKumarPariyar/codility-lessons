<?php

namespace spec\Lesson03;

use PhpSpec\ObjectBehavior;

class GenomicRangeQuerySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson03\GenomicRangeQuery');
    }

    public function it_should_return_241_for_CAGCCTA_250_456()
    {
        $this->solution('CAGCCTA', [2, 5, 0], [4, 5, 6])->shouldReturn([2, 4, 1]);
    }
}
