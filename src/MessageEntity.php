<?php

namespace Formapro\TelegramBot;


use function Formapro\Values\get_value;

class MessageEntity
{

    private $values = [];

    private $objects = [];


    public function getType(): string
    {
        return get_value($this, 'type');
    }

    public function getOffset(): int
    {
        return get_value($this, 'offset');
    }

    public function getLength(): int
    {
        return get_value($this, 'length');
    }
}