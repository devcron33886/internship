<?php

namespace App\Models\Enum;

enum StatusEnum: string
{
    case OPEN = 'open';
    case CLOSED = 'closed';
    case FILLED = 'filled';

    public function getLabel(): string
    {
        return match ($this) {
            self::OPEN => 'Open',
            self::CLOSED => 'Closed',
            self::FILLED => 'Filled',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::OPEN => 'green',
            self::CLOSED => 'blue',
            self::FILLED => 'red',
        };
    }
}
