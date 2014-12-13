minecraft-commander
========

This is a library to send commands (http://minecraft.gamepedia.com/Commands) to a minecraft-server and parse their output.

Installation
------------

MControl can be installed via. Composer:

    composer require "gries/minecraft-commands"

Basic usage
-----------
```php
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
```

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
