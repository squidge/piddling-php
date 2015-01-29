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
}
