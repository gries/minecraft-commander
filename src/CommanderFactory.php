<?php

namespace gries\Minecraft\Commander;

use gries\Rcon\MessengerFactory;

class CommanderFactory
{
    /**
     * Create a commander for a given server.
     *
     * @param $host
     * @param $port
     * @param $password
     *
     * @return \gries\Minecraft\Commander\Commander
     */
    public static function create($host, $port, $password)
    {
        $rconMessenger = MessengerFactory::create($host, $port, $password);

        return new Commander($rconMessenger);
    }
}
