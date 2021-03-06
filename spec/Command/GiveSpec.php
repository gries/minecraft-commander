<?php

namespace spec\gries\Minecraft\Commander\Command;

use PhpSpec\ObjectBehavior;

class GiveSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('gries', 25, 60);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Commander\Command\Give');
    }

    function it_creates_correct_command_string()
    {
        $this->beConstructedWith('gries', 14, 32);
        $this->getCommandString()->shouldReturn('give gries 14 32');
    }
}
