<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\PostStatus;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostStatusResource\Pages;
use App\Filament\Resources\PostStatusResource\RelationManagers;

class PostStatusResource extends Resource
{
    protected static ?string $model = PostStatus::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status')
                ->options([
                    '1' => 'success',
                    '2' => 'pending',
                    '3' => 'failure',
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('status_type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    protected function handleRecordUpdate(PostStatus $record, array $data): PostStatus
    {
        $record->update($data);

        return $record;
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPostStatuses::route('/'),
            'create' => Pages\CreatePostStatus::route('/create'),
            'edit' => Pages\EditPostStatus::route('/{record}/edit'),
        ];
    }    
}
