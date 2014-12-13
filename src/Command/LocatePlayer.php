<?php

namespace gries\Minecraft\Commander\Command;

use gries\Minecraft\Commander\Command\Teleport;
use gries\Minecraft\Commander\Command\ResponseParser\LocatePlayerParser;

class LocatePlayer extends Teleport
{
    public function getResponseParser()
    {
        return new LocatePlayerParser($this->parameters['subjects'][0]);
    }
}
