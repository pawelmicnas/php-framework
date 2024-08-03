<?php

declare(strict_types=1);

namespace App\Entity;

interface EntityInterface
{
    public function getEntityName(): string;
    public function getTableName(): string;
}
