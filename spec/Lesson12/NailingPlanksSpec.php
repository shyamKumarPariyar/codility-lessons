<?php

namespace spec\Lesson12;

use PhpSpec\ObjectBehavior;

class NailingPlanksSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson12\NailingPlanks');
    }
}
