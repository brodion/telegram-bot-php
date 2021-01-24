<?php

namespace Formapro\TelegramBot;

use function Formapro\Values\get_value;
use function Formapro\Values\get_values;
use function Formapro\Values\set_value;

class SendMessage
{
    private $values = [];

    private $objects = [];

    public function __construct(int $chatId, string $text)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'text', $text);
    }

    public function getChatId(): int
    {
        return get_value($this, 'chat_id');
    }

    public function getText(): string
    {
        return get_value($this, 'text');
    }

    public function setParseMode(string $parseMode): void
    {
        set_value($this, 'parse_mode', $parseMode);
    }

    public function getParseMode(): ?string
    {
        return get_value($this, 'parse_mode');
    }

    public function setReplyMarkup(ReplyMarkup $replyMarkup): void
    {
        set_value($this, 'reply_markup', json_encode(get_values($replyMarkup)));
    }

    public function setDisableWebPagePreview(bool $disable): void
    {
        set_value($this, 'disable_web_page_preview', $disable);
    }

    public function isDisableWebPagePreview(): bool
    {
        return get_value($this, 'disable_web_page_preview', false);
    }

    public function setDisableNotification(bool $disable): void
    {
        set_value($this, 'disable_notification', $disable);
    }

    public function isDisableNotification(): bool
    {
        return get_value($this, 'disable_notification', false);
    }
}
