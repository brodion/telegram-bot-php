<?php

namespace Formapro\TelegramBot;


use function Formapro\Values\get_object;
use function Formapro\Values\get_value;

class Entities
{
    private $values = [];

    private $objects = [];

    public function getAll(): array
    {
        $entities = [];
        foreach ($this->values as $key => $value)
        {
            $entities[] = get_object($this,$key, MessageEntity::class);
        }
        return $entities;
    }
}