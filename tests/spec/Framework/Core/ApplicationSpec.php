<?php

namespace spec\Framework\Core;

use Illuminate\Events\Dispatcher;
use Illuminate\Routing\Router;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Framework\Core\Application');
    }

    function it_can_check_for_global_exceptions()
    {
        $this->catchGlobalExceptions(new \Exception)->shouldReturn(true);
    }

    function it_can_fetch_database_configuration()
    {
        $this['config'] = [
            'database' => [
                'default' => 'mysql'
            ]
        ];

        $this->database()->shouldReturn(['default' => 'mysql']);
    }

    function it_can_fetch_mail_configuration()
    {
        $this['config'] = [
            'mail' => [
                'driver' => 'smtp'
            ]
        ];

        $this->mail()->shouldReturn(['driver' => 'smtp']);
    }
}

