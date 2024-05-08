<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestApplications extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Application::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->searchable(),
            TextColumn::make('phone')
                ->searchable(),
            TextColumn::make('type')
                ->sortable()
                ->searchable(),

            TextColumn::make('status')
                ->sortable()
                ->badge()
                ->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
    }
}
