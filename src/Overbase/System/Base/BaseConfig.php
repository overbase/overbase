<?php

namespace Overbase\System\Base;

/**
 * Base configuration class which accept configuration in form of key-value pairs array, where each configuration
 * parameter is listed as key, and it's actual setting as a value.
 *
 * The 'connections' configuration setting contain array of available connections with their aliases and actual
 * connections strings in format of 'dbms://user:password@hostname:port/database', where each part of the connection
 * string has next purpose:
 * dbms     - actual database management system name;
 * user     - name of the user which will be used for connection;
 * password - password for user connection;
 * hostname - name of the host or IP address where actual database server is located;
 * port     - port on the target database host which will be used for connection;
 * database - default database name which will be used for connection.
 */
class BaseConfig
{

    const CONNECTIONS = 'connections';

    /**
     * @var array
     */
    private array $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConnections(): array
    {
        return $this->config[self::CONNECTIONS];
    }

    /*
     * Launches scan for available configurations.
     */
    public function scan() {

    }

}