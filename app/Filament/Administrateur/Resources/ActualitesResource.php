<?php

namespace App\Filament\Administrateur\Resources;

use App\Filament\Administrateur\Resources\ActualitesResource\Pages;
use App\Filament\Administrateur\Resources\ActualitesResource\RelationManagers;
use App\Models\Actualites;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualitesResource extends Resource
{
    protected static ?string $model = Actualites::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('titre')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('img_url')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('is_active')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('is_active')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualites::route('/create'),
            'edit' => Pages\EditActualites::route('/{record}/edit'),
        ];
    }
}
