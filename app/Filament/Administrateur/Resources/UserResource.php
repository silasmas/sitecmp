<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\UserResource\Pages;
use App\Filament\Administrateur\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire utilisataire")->schema([
                        Select::make('role_id')
                            ->label(label: 'Role')
                            ->searchable()
                            ->columnSpan(6)
                            ->preload()
                            ->relationship('roles', 'name'),

                        TextInput::make('name')
                            ->required()
                             ->label(label: 'Nom')
                            ->columnSpan(6),
                        TextInput::make('email')
                            ->email()
                             ->label(label: 'Email')
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('password')
                         ->label(label: 'Mot de passe')
                         ->columnSpan(6)
                            ->password(),
                            Toggle::make('notifiable')
                            ->label('Active (pour que l\'utilisateur puisse être notifier quand il y a une requête de prière)')
                            ->columnSpan(6)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                        // TextInput::make('password')
                        //  ->label(label: 'Repeter mot de passe')
                        //     ->password(),
                    ])->columnS(12)
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('roles.name')
                    ->badge()->color('success')
                        ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    IconColumn::make('notifiable')
                    ->label("Notifiable")
                    ->boolean(),
                // Tables\Columns\TextColumn::make('organiser_id')
                //     ->numeric()
                //     ->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
