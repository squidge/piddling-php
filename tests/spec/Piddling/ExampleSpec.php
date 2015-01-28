<?php

namespace spec\Piddling;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExampleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Piddling\Example');
    }
}
