<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Enum\ApplicationStatus;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ApplicationTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending', Application::query()
                ->where('status', ApplicationStatus::PENDING)
                ->count())
                ->color('warning')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('All applications are pending.')
                ->icon('heroicon-o-exclamation-triangle'),
            Stat::make('Shortlisted', Application::query()
                ->where('status', ApplicationStatus::SHORTLISTED)
                ->count())
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Applications are shortlisted.')
                ->icon('heroicon-o-check-circle'),
            Stat::make('Rejected', Application::query()
                ->where('status', ApplicationStatus::REJECTED)
                ->count())
                ->color('danger')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Applications are rejected.')
                ->icon('heroicon-o-x-circle'),
            Stat::make('Selected', Application::query()
                ->where('status', ApplicationStatus::SELECTED)

                ->count())
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Applications are selected.')
                ->icon('heroicon-o-check'),
            Stat::make('Interviewed', Application::query()
                ->where('status', ApplicationStatus::INTERVIEWED)
                ->count())
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Applications are interviewed.')
                ->icon('heroicon-o-check'),
            Stat::make('Internship', Application::query()
                ->where('type', 'Internship')
                ->count())
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Internships are selected.')
                ->icon('heroicon-o-check'),
            Stat::make('Volunteering', Application::query()
                ->where('type', 'Volunteering')
                ->count())
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Volunteering are selected.')
                ->icon('heroicon-o-check'),
            Stat::make('All', Application::all()->count())
                ->description('All applications are selected.')
                ->icon('heroicon-o-check'),
            Stat::make('Department', Application::all()
                ->groupBy('department_id')
                ->count())
                ->description('All applications are selected.')
                ->icon('heroicon-o-check'),

        ];
    }
}
