<?php

declare(strict_types=1);

namespace App\Entity;

use ReflectionClass;

abstract class AbstractEntity implements EntityInterface
{
    public function getEntityName(): string
    {
        return static::class;
    }

    public function getTableName(): string
    {
        return strtolower((new ReflectionClass($this->getEntityName()))->getShortName());
    }
}
