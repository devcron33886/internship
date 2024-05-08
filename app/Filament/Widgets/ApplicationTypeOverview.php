<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ApplicationTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Internship', Application::query()
                ->where('type', 'internship')
                ->count())
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->icon('heroicon-o-bars-3-bottom-left'),
            Stat::make('Volunteering', Application::query()
                ->where('type', 'volunteering')
                ->count())
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->icon('heroicon-o-exclamation-triangle'),
            Stat::make('All', Application::all()->count())
                ->description('Total applications.')
                ->icon('heroicon-o-list-bullet')
                ->color('danger')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

        ];
    }
}
