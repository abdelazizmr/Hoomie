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
            ->description('increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Card::make('Number of active posts', count($posts))
            ->description('increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->chart([7, 2, 20, 31, 15, 14, 35])
            ->color('warning'),

       

           
        ];
    }
}
