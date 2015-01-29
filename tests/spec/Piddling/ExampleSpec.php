<?php

namespace spec\Piddling;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExampleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Piddling\Example');
    }

    public function it_should_say_hello()
    {
        $this->greeting()->shouldReturn('Hai!');
    }
}
