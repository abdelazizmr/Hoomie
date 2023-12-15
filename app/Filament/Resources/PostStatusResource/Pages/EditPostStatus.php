<?php

namespace App\Filament\Resources\PostStatusResource\Pages;

use App\Filament\Resources\PostStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPostStatus extends EditRecord
{
    protected static string $resource = PostStatusResource::class;

    

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);

        return $record;
    }

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
