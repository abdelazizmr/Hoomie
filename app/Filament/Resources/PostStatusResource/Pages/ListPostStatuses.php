<?php

namespace App\Filament\Resources\PostStatusResource\Pages;

use App\Filament\Resources\PostStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPostStatuses extends ListRecords
{
    protected static string $resource = PostStatusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
