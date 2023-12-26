<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InterestResource\Pages;
use App\Filament\Resources\InterestResource\RelationManagers;
use App\Models\Interest;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InterestResource extends Resource
{
    protected static ?string $model = Interest::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Manage Interests';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('user')->relationship('user','name'),
                TextInput::make('hobbies'),
                TextInput::make('smoking'),
                TextInput::make('introvert'),
                TextInput::make('food_separated'),
                TextInput::make('cleaning'),
                TextInput::make('religion'),
                TextInput::make('wifi'),
                TextInput::make('visiting_family_times')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            //

            Tables\Columns\TextColumn::make('user.name')->searchable(),
            // Tables\Columns\TextColumn::make('hobbies'),
            // Tables\Columns\TextColumn::make('smoking'),
            // Tables\Columns\TextColumn::make('introvert'),
            // Tables\Columns\TextColumn::make('food_separated'),
            // Tables\Columns\TextColumn::make('cleaning'),
            // Tables\Columns\TextColumn::make('religion'),
            // Tables\Columns\TextColumn::make('wifi'),
            //Tables\Columns\TextColumn::make('visiting_family_times')->label('Visits'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListInterests::route('/'),
            'create' => Pages\CreateInterest::route('/create'),
            'edit' => Pages\EditInterest::route('/{record}/edit'),
        ];
    }    
}
