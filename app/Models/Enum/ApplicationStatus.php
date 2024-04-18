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
            self::PENDING => 'warning',
            self::SHORTLISTED => 'success',
            self::INTERVIEWED => 'info',
            self::SELECTED => 'success',
            self::REJECTED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-exclamation-triangle',
            self::SHORTLISTED => 'heroicon-o-check-circle',
            self::INTERVIEWED => 'heroicon-o-check',
            self::SELECTED => 'heroicon-o-check-badge',
            self::REJECTED => 'heroicon-o-x-circle',
        };
    }
}
