<?php

namespace spec\Framework\Core;

use League\Container\Container;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoxSpec extends ObjectBehavior
{
    public function let(Container $c)
    {
        $this->beConstructedWith($c);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Framework\Core\Box');
    }

    public function it_can_start_application()
    {
        $this->startApplication()->shouldReturn(true);
    }

    public function it_can_check_for_global_exceptions(Container $c)
    {
        $this->catchGlobalExceptions(new \Exception)->shouldReturn(true);
    }
}
