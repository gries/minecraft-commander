minecraft-commands
========

This is a library to send commands (http://minecraft.gamepedia.com/Commands) to a minecraft-server and parse their output.

Installation
------------

MControl can be installed via. Composer:

    composer require "gries/minecraft-commands"

Basic usage
-----------
    use gries\MControl\Server\Commander;
    use gries\MControl\Server\Rcon\RconManager;

    //TODO: create a RconConnection
    $rcon = new RconManager('localhost', 25575, 'p4ssw0rd');

    // create a Commander
    $commander = new Commander($rcon);

    // set the server-time
    $commander->setTime('12000');

    // listPlayers
    $players = $commander->listPlayers(); // -> array('playerx', 'playery');

    // teleport one player to another
    $commander->teleport(array('playerx', 'playery'));

    // locate a player
    $location = $commander->locate('playerx');  // -> array('x' => 157, 'y' => 50, 'z' => -54);

    // execute a raw command
    $response = $commander->raw('my custom command string');

Currently these Commands are available for the Commander
-------------------------------------------------------

- say
- listPlayers
- locatePlayer
- teleport
- give
- setWeather
- setTime
- setBlock
- raw

Running the tests
-----------------
    bin/phpspec run

Contribute!
-----------
Feel free to give me feedback/feature-request/bug-reports via. github issues.
Or just send me a pull-request :)

Author
------

- [Christoph Rosse](http://twitter.com/griesx)

License
-------

For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
