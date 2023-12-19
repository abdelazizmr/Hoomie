<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {

        $users = User::all();
        $posts = Post::all();
      

        return [
            Card::make('Users of Hoomie', count($users))
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Number of active posts', count($posts))
            ->descriptionIcon('heroicon-s-trending-down')
            ->color('warning'),
           
        ];
    }
}
