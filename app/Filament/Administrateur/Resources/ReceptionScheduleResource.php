<?php

namespace App\Filament\Administrateur\Resources;

use App\Filament\Administrateur\Resources\ReceptionScheduleResource\Pages;
use App\Filament\Administrateur\Resources\ReceptionScheduleResource\RelationManagers;
use App\Models\ReceptionSchedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReceptionScheduleResource extends Resource
{
    protected static ?string $model = ReceptionSchedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListReceptionSchedules::route('/'),
            'create' => Pages\CreateReceptionSchedule::route('/create'),
            'edit' => Pages\EditReceptionSchedule::route('/{record}/edit'),
        ];
    }
}
