<?php

declare(strict_types=1);

namespace App\Entity;

class User extends AbstractEntity
{
    /** @var int $id */
    private $id;

    /** @var string $name */
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
