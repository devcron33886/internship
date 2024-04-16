<?php

namespace App\Models\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ApplicationStatus: string implements HasColor, HasIcon, HasLabel
{
    case PENDING = 'pending';
    case SHORTLISTED = 'shortlisted';
    case INTERVIEWED = 'interviewed';
    case SELECTED = 'selected';
    case REJECTED = 'rejected';

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::SHORTLISTED => 'Shortlisted',
            self::INTERVIEWED => 'Interviewed',
            self::SELECTED => 'Selected',
            self::REJECTED => 'Rejected',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::PENDING => 'yellow',
            self::SHORTLISTED => 'green',
            self::INTERVIEWED => 'blue',
            self::SELECTED => 'purple',
            self::REJECTED => 'red',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-user',
            self::SHORTLISTED => 'heroicon-o-user',
            self::INTERVIEWED => 'heroicon-o-user',
            self::SELECTED => 'heroicon-o-user',
            self::REJECTED => 'heroicon-o-user',
        };
    }
}
