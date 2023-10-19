<?php

namespace Entities\Enum;

enum Status: string
{
    case COMPLETED = "completed";
    case DELETED = "deleted";
    case PENDING = "pending";

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
