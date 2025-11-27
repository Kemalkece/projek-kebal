<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Teknisi;
use App\Models\Artikel;

class StatsDashbord extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Teknisi', Teknisi::count())
                ->description('Total teknisi terdaftar')
                ->color('success'),
            Stat::make('Artikel', Artikel::count())
                ->description('Total artikel')
                ->color('success'),
        ];
    }
}
