<?php

namespace spec\gries\Minecraft\Commander\Command;

use PhpSpec\ObjectBehavior;

class RawSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('my custom command 1 2 3');

        $this->shouldImplement('gries\Minecraft\Commander\Command\CommandInterface');
        $this->shouldHaveType('gries\Minecraft\Commander\Command\Raw');
    }

    function it_creates_correct_command_string()
    {
        $this->beConstructedWith('my custom command 1 2 3');

        $this->getCommandString()->shouldBe('my custom command 1 2 3');
    }
}
