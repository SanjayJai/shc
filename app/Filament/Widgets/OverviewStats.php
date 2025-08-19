<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

use App\Models\Service;
use App\Models\Project;


class OverviewStats extends StatsOverviewWidget
{
    protected static ?string $pollingInterval = null; // set to '10s' if you want live updates

    protected function getCards(): array
    {
        return [
            Card::make(' Services', Service::count())
                ->description('Total services listed')
                ->color('primary'),

            Card::make('Project Images', Project::count())
                ->description('Images in Gallery')
                ->color('success'),

          
        ];
    }
}
