<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Offrande;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\OrffrandeResource\Pages;
use App\Filament\Administrateur\Resources\OrffrandeResource\RelationManagers;

class OrffrandeResource extends Resource
{
    protected static ?string $model = Offrande::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire ajouter les types d'offrande")->schema([
                        TextInput::make('nom')
                            ->required()
                            ->columnSpan(12)
                            ->maxLength(255),
                        RichEditor::make('Description')
                            ->label(label: 'Contenu du message')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Active (pour le rendre visible ou pas)')
                            ->columnSpan(6)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ])->columnS(12)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label("Description")
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label("Est actif")
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListOrffrandes::route('/'),
            // 'create' => Pages\CreateOrffrande::route('/create'),
            // 'edit' => Pages\EditOrffrande::route('/{record}/edit'),
        ];
    }
    public static function shouldRegisterNavigation(): bool
{
    return false; // Masque la ressource dans le menu
}

}
