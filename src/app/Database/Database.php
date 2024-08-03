<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class Database
{
    /** @var string */
    private $host;

    /** @var string */
    private $name;

    /** @var string */
    private $user;

    /** @var string */
    private $password;

    /** @var array */
    private $options;

    /** @var PDO */
    private $connection;

    public function __construct(string $host, string $name, string $user, string $password, array $options = [])
    {
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->password = $password;
        $this->options = $options;
        $this->connection = new PDO(
            $this->host . ';dbname=' . $this->name . ';charset=utf8', $this->user, $this->password, $options
        );
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
