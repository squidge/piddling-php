<?php

namespace spec\Piddling;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoxSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Piddling\Box');
    }
}
