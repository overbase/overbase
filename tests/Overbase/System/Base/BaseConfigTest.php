<?php

namespace Overbase\System\Base;

use PHPUnit\Framework\TestCase;

class BaseConfigTest extends TestCase
{

    const DEFAULT = 'default';

    const DEFAULT_CONNECTION_STRING = 'mysql://root:root@mysql.overbase.local:3306';

    const LIMITED = 'limited';

    const LIMITED_CONNECTION_STRING = 'mysql://limited:limited@mysql.overbase.local:3306';

    public function testConnections()
    {
        $config = new BaseConfig(
            [
                BaseConfig::CONNECTIONS => [
                    self::DEFAULT => self::DEFAULT_CONNECTION_STRING,
                    self::LIMITED => self::LIMITED_CONNECTION_STRING
                ]
            ]
        );

        $connections = $config->getConnections();

        $this->assertEquals(self::DEFAULT_CONNECTION_STRING, $connections[self::DEFAULT]);
        $this->assertEquals(self::LIMITED_CONNECTION_STRING, $connections[self::LIMITED]);
    }

}