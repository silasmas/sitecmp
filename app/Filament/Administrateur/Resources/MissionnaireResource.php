<?php

namespace App\Filament\Administrateur\Resources;

use App\Filament\Administrateur\Resources\MissionnaireResource\Pages;
use App\Filament\Administrateur\Resources\MissionnaireResource\RelationManagers;
use App\Models\Missionnaire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MissionnaireResource extends Resource
{
    protected static ?string $model = Missionnaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birthday')
                    ->required(),
                Forms\Components\TextInput::make('age')
                    ->maxLength(255),
                Forms\Components\Textarea::make('adresse')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('etat_civil')
                    ->maxLength(255),
                Forms\Components\TextInput::make('profession')
                    ->maxLength(255),
                Forms\Components\TextInput::make('annee_conversion')
                    ->maxLength(255),
                Forms\Components\TextInput::make('date_lieu_bapteme')
                    ->maxLength(255),
                Forms\Components\TextInput::make('eglise_attache')
                    ->required()
                    ->maxLength(255)
                    ->default('CMP'),
                Forms\Components\TextInput::make('temps_au_cmp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('departement')
                    ->maxLength(255),
                Forms\Components\TextInput::make('participer_mission')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\Textarea::make('description_mission')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('formation_biblique')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('lecture_bible')
                    ->maxLength(255),
                Forms\Components\TextInput::make('livre_bible')
                    ->maxLength(255),
                Forms\Components\TextInput::make('base_mission')
                    ->maxLength(255),
                Forms\Components\TextInput::make('concepte_familier')
                    ->maxLength(255),
                Forms\Components\TextInput::make('langue')
                    ->maxLength(255),
                Forms\Components\Textarea::make('competence')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('outils_rs')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\Textarea::make('but_formation')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('objectif')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('disponible')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('validationFormulaire')
                    ->required()
                    ->maxLength(255)
                    ->default(0),
                Forms\Components\TextInput::make('note_validation')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('etat_civil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('profession')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annee_conversion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_lieu_bapteme')
                    ->searchable(),
                Tables\Columns\TextColumn::make('eglise_attache')
                    ->searchable(),
                Tables\Columns\TextColumn::make('temps_au_cmp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('departement')
                    ->searchable(),
                Tables\Columns\TextColumn::make('participer_mission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('formation_biblique')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lecture_bible')
                    ->searchable(),
                Tables\Columns\TextColumn::make('livre_bible')
                    ->searchable(),
                Tables\Columns\TextColumn::make('base_mission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('concepte_familier')
                    ->searchable(),
                Tables\Columns\TextColumn::make('langue')
                    ->searchable(),
                Tables\Columns\TextColumn::make('outils_rs')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disponible')
                    ->searchable(),
                Tables\Columns\TextColumn::make('validationFormulaire')
                    ->searchable(),
                Tables\Columns\TextColumn::make('note_validation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMissionnaires::route('/'),
            'create' => Pages\CreateMissionnaire::route('/create'),
            'edit' => Pages\EditMissionnaire::route('/{record}/edit'),
        ];
    }
}
