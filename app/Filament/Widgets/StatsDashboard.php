<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countArticles = \App\Models\Article::count();
        // $countVisitors = \App\Models\Visitor::count();
        return [
            Stat::make('Jumlah Article', $countArticles),
            // Stat::make('Jumlah Visitor', $countVisitors),
            Stat::make('Jumlah Article', $countArticles),

        ];
    }
}
