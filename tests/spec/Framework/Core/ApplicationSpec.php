<?php

namespace spec\Framework\Core;

use Klein\Klein;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Framework\Core\Application');
    }

    function it_can_start_application()
    {
        $this['router'] = new Klein;
        $this->startApplication()->shouldReturn(true);
    }
}
