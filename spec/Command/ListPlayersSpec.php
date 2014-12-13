<?php

namespace spec\gries\Minecraft\Commander\Command;

use PHPSpec\ObjectBehavior;

class ListPlayersSpec extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Commander\Command\ListPlayers');
    }

    function it_creates_correct_command_string()
    {
        $this->getCommandString()->shouldReturn('list');
    }
}
