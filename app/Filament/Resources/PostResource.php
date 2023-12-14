<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

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
            //
            Tables\Columns\TextColumn::make('user.name'),
            Tables\Columns\TextColumn::make('description'),
            Tables\Columns\TextColumn::make('budget'),
            Tables\Columns\TextColumn::make('move_in'),
            Tables\Columns\TextColumn::make('status.status_type'),
            ])
            ->filters([
            //
            SelectFilter::make('status_id')
            ->options([
                '1' => 'success',
                '2' => 'pending',
                '3' => 'failure',
            ]),
            

            ])
            ->actions([
               Tables\Actions\ViewAction::make(),
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }    
}
