<?php

namespace spec\gries\Minecraft\Commander\Command;

use PhpSpec\ObjectBehavior;


class LocatePlayerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(array('gries', '~0', '~0', '~0'));

        $this->shouldBeAnInstanceOf('gries\Minecraft\Commander\Command\LocatePlayer');
        $this->shouldBeAnInstanceOf('gries\Minecraft\Commander\Command\Teleport');
    }

    function it_uses_the_correct_response_parser()
    {
        $this->beConstructedWith(array('gries', '~0', '~0', '~0'));
        $this->getResponseParser()->shouldBeAnInstanceOf('gries\Minecraft\Commander\Command\ResponseParser\LocatePlayerParser');
    }
}
