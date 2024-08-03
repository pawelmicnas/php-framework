<?php

declare(strict_types=1);

namespace App\Database;

use App\Entity\EntityInterface;
use PDO;

class QueryBuilder
{
    /** @var PDO */
    protected $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function selectAll(EntityInterface $entity)
    {
        $statement = $this->connection->prepare("SELECT * FROM {$entity->getTableName()}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $entity->getEntityName());
    }
}
