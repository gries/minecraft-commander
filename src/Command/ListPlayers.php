<?php
namespace gries\Minecraft\Commander\Command;

use gries\Minecraft\Commander\Command\ResponseParser\ListPlayersParser;
/**
 * Represents a Say Command that shows a Message to all Players on the Server
 */
class ListPlayers implements CommandInterface
{
    /**
     * (non-PHPdoc)
     * @see MControl\Server\Command.Command::getCommandString()
     */
    public function getCommandString()
    {
        return 'list';
    }

    /**
     * @return ResponseParser\ResponseParserInterface|null
     */
    public function getResponseParser()
    {
        return new ListPlayersParser();
    }
}
