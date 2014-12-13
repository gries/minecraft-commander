<?php
use gries\Minecraft\Commander\CommanderFactory;

require_once __DIR__ . '/../vendor/autoload.php';

// create a Commander
$commander = CommanderFactory::create('example.com', 25575, 'mypass');

// set the server-time
$commander->setTime('12000');

// listPlayers
$players = $commander->listPlayers();

print_r($players);

echo $commander->raw('seed');