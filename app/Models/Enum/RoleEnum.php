<?php

namespace App\Models\Enum;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case INTERNEE = 'internee';

    public function getLabel(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::INTERNEE => 'Interne',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::ADMIN => 'green',
            self::INTERNEE => 'blue',
        };
    }
}
