<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoryWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getHeaderWidgetsColumns(): int | array
    {
        return 1;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Categories', Category::count())
                ->description('Categories Has Added')
                ->descriptionIcon('heroicon-o-tag', IconPosition::Before)
                // ->chart([
                //     1, 2, 3, 4, 5, 6, 7
                // ])
                ->color('success'),
            Stat::make('Total Posts', Post::count())
                ->description('Posts Has Added')
                ->descriptionIcon('heroicon-o-clipboard-document-list', IconPosition::Before)

                ->color('danger'),
            Stat::make('Total Users', User::count())
                ->description('User Has Added')
                ->descriptionIcon('heroicon-o-users', IconPosition::Before)
                ->color('secondary')
        ];
    }
}