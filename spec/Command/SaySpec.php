<?php

namespace spec\gries\Minecraft\Commander\Command;

use PHPSpec\ObjectBehavior;

class SaySpec extends ObjectBehavior
{
    function let($text)
    {
        $this->beConstructedWith($text);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Commander\Command\Say');
    }

    function it_creates_correct_command_string()
    {
        $this->beConstructedWith('Some Text is awesome!');
        $this->getCommandString()->shouldReturn('say Some Text is awesome!');
    }
}
