<?php

namespace spec\Framework\Core;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoutingSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Framework\Core\Routing');
    }

    public function it_should_say_hello()
    {
        $this->greeting()->shouldReturn('Hai!');
    }
}
