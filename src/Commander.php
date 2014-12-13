<?php
namespace gries\Minecraft\Commander;

use gries\Minecraft\Commander\Command;
use gries\Rcon\Messenger;

class Commander
{
    /**
     * @var Messenger
     */
    protected $rconMessenger;

    /**
     * @param \gries\Rcon\Messenger $rconMessenger
     */
    public function __construct(Messenger $rconMessenger)
    {
        $this->rconMessenger = $rconMessenger;
    }

    /**
     * Say something to all Players on the server
     *
     * @param string $text
     * @return boolean if Command was executed
     */
    public function say($text)
    {
        return $this->executeCommand(new Command\Say($text));
    }

    /**
     * Get a list of all Players on the server
     *
     * @return array ListOfPlayers
     */
    public function listPlayers()
    {
        return $this->executeCommand(new Command\ListPlayers());
    }

    public function locatePlayer($player)
    {
        return $this->executeCommand(new Command\LocatePlayer(array($player, '~0', '~0', '~0')));
    }

    public function teleport(array $subjects)
    {
        return $this->executeCommand(new Command\Teleport($subjects));
    }

    public function give($player, $itemId, $amount)
    {
        return $this->executeCommand(new Command\Give($player, $itemId, $amount));
    }

    public function setWeather($weatherType)
    {
        return $this->executeCommand(new Command\Weather($weatherType));
    }

    public function setTime($time)
    {
        return $this->executeCommand(new Command\SetTime($time));
    }

    public function setBlock($type, array $coordinates, $meta = 0)
    {
        $this->executeCommand(new Command\SetBlock(
            $type,
            $coordinates,
            Command\SetBlock::SET_METHOD_REPLACE,
            $meta
        ));
    }

    public function raw($command)
    {
        return $this->executeCommand(new Command\Raw($command));
    }

    /**
     * Execute the Command on the Minecraftserver
     * via the rconMessenger
     *
     * @param \gries\Minecraft\Commander\Command\CommandInterface $command
     *
     * @return bool|mixed|string
     */
    protected function executeCommand(Command\CommandInterface $command)
    {
        $callable = null;

        if ($parser = $command->getResponseParser()) {
            $callable = [$parser, 'getResponse'];
        }

        return $this->rconMessenger->send($command->getCommandString(), $callable);
    }
}
