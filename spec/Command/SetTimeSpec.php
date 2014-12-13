<?php

namespace spec\gries\Minecraft\Commander\Command;

use PHPSpec\ObjectBehavior;

class SetTimeSpec extends ObjectBehavior
{
    function let($text)
    {
        $this->beConstructedWith(6000);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Commander\Command\SetTime');
    }

    function it_creates_correct_command_string()
    {
        $this->beConstructedWith(4000);
        $this->getCommandString()->shouldReturn('time set 4000');
    }
}
