<?php

namespace spec\Lesson11;

use PhpSpec\ObjectBehavior;

class FibFrogSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson11\FibFrog');
    }
}
