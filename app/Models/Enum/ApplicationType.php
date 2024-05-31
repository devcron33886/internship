<?php

namespace App\Models\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ApplicationType: string implements HasColor, HasIcon, HasLabel
{
    case INTERNSHIP = 'internship';
    case VOLUNTEERING = 'volunteering';

    public function getLabel(): string
    {
        return match ($this) {
            self::INTERNSHIP => 'Internship',
            self::VOLUNTEERING => 'Volunteering',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::INTERNSHIP => 'info',
            self::VOLUNTEERING => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::INTERNSHIP => 'heroicon-o-check-circle',
            self::VOLUNTEERING => 'heroicon-o-check-badge',
        };
    }
}
