<?php

namespace spec\Piddling;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoxSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Piddling\Box');
    }

    public function it_can_say_hello_world()
    {
        $this->hello()->shouldReturn('Hello, World!');
    }
}
