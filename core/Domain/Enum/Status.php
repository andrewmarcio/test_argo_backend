<?php

namespace Domain\Enum;

enum Status: string
{
    case PENDING = "pending";
    case CANCELLED = "cancelled";
    case COMPLETED = "completed";

    public static function getValues(): array {
        return array_column(self::cases(), 'value');
    }
}